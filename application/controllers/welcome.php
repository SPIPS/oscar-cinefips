<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("_config.php");
class Welcome extends CI_Controller {
	public function index()
	{
		if($this->isConnected()){
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
		} else {
			$this->load->view('welcome_index');
		}
		
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