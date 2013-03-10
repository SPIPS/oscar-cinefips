<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("_config.php");
class Api extends CI_Controller {
	public function index()
	{
		$return = array('code' => 0, 'error' => 'youre a n00b', 'data' => null);
		echo json_encode($return);
		die();
	}
	
	public function getAllVideos()
	{
		$PDO = connectSQL();
		if(false == ($query = $PDO->query('SELECT * FROM cinefips_oscars_videos'))){
			$return = array('code' => 0, 'error' => 'cant retrieve videos', 'data' => null);
			echo json_encode($return);
			die();
		}
		$videos = $query->fetchAll(PDO::FETCH_ASSOC);
		$query->closeCursor();
		$return = array('code' => 1, 'error' => null, 'data' => $videos);
		echo json_encode($return);
		die();
	}
	
	public function getVideosFromCat($cat)
	{
		if(!is_numeric($cat)){
			$return = array('code' => 0, 'error' => 'cat is not a integer', 'data' => null);
			echo json_encode($return);
			die();
		}
		$PDO = connectSQL();
		// @TODO modifier le return de config.php     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//		if(false == ($query = $PDO->query('SELECT * FROM cinefips_oscars_videos'))){
//			$return = array('code' => 0, 'error' => 'cant retrieve videos', 'data' => null);
//			echo json_encode($return);
//			die();
//		}
//		$videos = $query->fetchAll(PDO::FETCH_ASSOC);
//		$query->closeCursor();
		if(false == ($query = $PDO->prepare('SELECT v.id, v.nom, v.iframe, v.realisateur, v.acteurs, v.description 
			FROM cinefips_oscars_cat_vid AS cv, cinefips_oscars_videos AS v WHERE v.id = cv.video AND categorie = ?'))){
			$return = array('code' => 0, 'error' => 'cant prepare cat_vid', 'data' => null);
			echo json_encode($return);
			die();
		}
		if(false == ($query->execute(array($cat)))){
			$return = array('code' => 0, 'error' => 'cant execute cat_vid', 'data' => null);
			echo json_encode($return);
			die();
		}
		$catvid = $query->fetchAll(PDO::FETCH_ASSOC);
		$query->closeCursor();
		$return = array('code' => 1, 'error' => null, 'data' => $catvid);
		echo json_encode($return);
		die();
	}
	
	public function getCats()
	{
		$PDO = connectSQL();
		if(false == ($query = $PDO->query('SELECT * FROM cinefips_oscars_categories'))){
			$return = array('code' => 0, 'error' => 'cant retrieve categories', 'data' => null);
			echo json_encode($return);
			die();
		}
		$videos = $query->fetchAll(PDO::FETCH_ASSOC);
		$query->closeCursor();
		$return = array('code' => 1, 'error' => null, 'data' => $videos);
		echo json_encode($return);
		die();
	}
	
	public function vote($cat, $vid){
		if(!$this->isConnected()){
			$return = array('code' => 0, 'error' => 'not connected', 'data' => null);
			echo json_encode($return);
			die();
		}
		if(!is_numeric($cat)){
			$return = array('code' => 0, 'error' => 'cat is not a integer', 'data' => null);
			echo json_encode($return);
			die();
		}
		if(!is_numeric($vid)){
			$return = array('code' => 0, 'error' => 'vid is not a integer', 'data' => null);
			echo json_encode($return);
			die();
		}
		$PDO = connectSQL();
		$query = $PDO->prepare('SELECT * FROM cinefips_oscars_vote WHERE login = ? AND categorie = ?');
		$query->execute(array($this->session->userdata('login'), $cat)) or die(json_encode(array('code' => 0, 'error' => 'error sql select old datas', 'data' => null)));
		$res = $query->fetch();
		$query->closeCursor();
		if($res == NULL || !$res || count($res) < 1){
			$query = $PDO->prepare('INSERT INTO cinefips_oscars_vote VALUES(?, ?, ?)');
			$query->execute(array($this->session->userdata('login'), $cat, $vid))or die(json_encode(array('code' => 0, 'error' => 'error sql insert new datas', 'data' => null)));;
			$query->closeCursor();
			$return = array('code' => 1, 'error' => null, 'data' => null);
			echo json_encode($return);
			die();
		} else {
			$return = array('code' => 0, 'error' => 'you have already vote for this category', 'data' => null);
			echo json_encode($return);
			die();
		}
	}

	public function alreadyVoted($cat){
		if(!$this->isConnected()){
			$return = array('code' => 0, 'error' => 'not connected', 'data' => null);
			echo json_encode($return);
			die();
		}
		if(!is_numeric($cat)){
			$return = array('code' => 0, 'error' => 'cat is not a integer', 'data' => null);
			echo json_encode($return);
			die();
		}
		$PDO = connectSQL();
		$query = $PDO->prepare('SELECT * FROM cinefips_oscars_vote WHERE login = ? AND categorie = ?');
		$query->execute(array($this->session->userdata('login'), $cat)) or die(json_encode(array('code' => 0, 'error' => 'error sql select old datas', 'data' => null)));
		$res = $query->fetch();
		$query->closeCursor();
		if($res == NULL || !$res || count($res) < 1){
			$return = array('code' => 1, 'error' => null, 'data' => 0);
			echo json_encode($return);
			die();
		} else {
			$return = array('code' => 1, 'error' => null, 'data' => 1);
			echo json_encode($return);
			die();
		}
	}
	
	public function catVoted(){
		if(!$this->isConnected()){
			$return = array('code' => 0, 'error' => 'not connected', 'data' => null);
			echo json_encode($return);
			die();
		}
		$PDO = connectSQL();
		$query = $PDO->prepare('SELECT v.categorie, v.video FROM cinefips_oscars_vote AS v, cinefips_oscars_categories AS c WHERE v.categorie = c.id AND v.login = ? AND v.categorie = ?');
		$query->execute(array($this->session->userdata('login'), $cat)) or die(json_encode(array('code' => 0, 'error' => 'error sql select old datas', 'data' => null)));
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$query->closeCursor();
		if($res == NULL || !$res || count($res) < 1){
			$res = array();
		}
		$return = array('code' => 1, 'error' => null, 'data' => $res);
		echo json_encode($return);
		die();
		
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
