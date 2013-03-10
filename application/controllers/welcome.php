<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("_config.php");
class Welcome extends CI_Controller {
	public function index()
	{
		$PDO = connectSQL();
		$query = $PDO->query('SELECT * FROM cinefips_oscars_categories');
		$cat = $query->fetchAll();
		$query->closeCursor();
		$query = $PDO->query('SELECT * FROM cinefips_oscars_videos');
		$videos = $query->fetchAll();
		$query->closeCursor();
		$query = $PDO->query('SELECT * FROM cinefips_oscars_vote');
		$vote = $query->fetchAll();
		$query->closeCursor();
		foreach($videos as &$v){
			$v['vote'] = 0;
		}
		foreach($vote as $key => $value){
			foreach($videos as &$v){
				if($value['video'] == $v['id']){
					$v['vote']++; break;
				}
			}
		}
		$this->load->view('welcome_index', array('videos'=>$videos, 'cat'=>$cat, 'user' => $this->session->userdata('login')));		
	}

	public function cat($cat){
		if(!is_numeric($cat)){
			die("catégorie non valide");
		}
		$active_cat = $cat;
		$PDO = connectSQL();
		if(false == ($query = $PDO->prepare('SELECT v.id, v.nom, v.iframe, v.realisateur, v.acteurs, v.description 
			FROM cinefips_oscars_cat_vid AS cv, cinefips_oscars_videos AS v WHERE v.id = cv.video AND categorie = ?'))){
			die();
		}
		if(false == ($query->execute(array($cat)))){
			die();
		}
		$catvid = $query->fetchAll(PDO::FETCH_ASSOC);
		$query = $PDO->query('SELECT * FROM cinefips_oscars_categories');
		$cat = $query->fetchAll();
		$query->closeCursor();
		$query = $PDO->query('SELECT * FROM cinefips_oscars_vote');
		$vote = $query->fetchAll();
		$query->closeCursor();
		foreach($catvid as &$v){
			$v['vote'] = 0;
		}
		foreach($vote as $key => $value){
			foreach($catvid as &$v){
				if($value['video'] == $v['id']){
					$v['vote']++; break;
				}
			}
		}
		$this->load->view('welcome_cat', array('videos'=>$catvid, 'active_cat'=>$active_cat, 'cat'=>$cat, 'user' => $this->session->userdata('login')));		


	}
	
	private function isConnected(){
		if($this->session->userdata('login')){
			$PDO = connectSQL();
			$query = $PDO->prepare('SELECT * FROM cinefips_oscars_users WHERE login = ? AND session_id = ?');
			$query->execute(array($this->session->userdata('login'), $this->session->userdata('session_id')));
			$res = $query->fetch();
			if($res == NULL || !$res || count($res)<1){
				$query = $PDO->prepare('DELETE FROM cinefips_oscars_users WHERE login = ?');
				$query->execute(array($this->session->userdata('login'))) or die($query->errorInfo());
				$query->closeCursor();
				$this->session->unset_userdata('login');
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */