<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("_config.php");
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login_index');
	}
	
	public function proceed()
	{
	    $connected = false;
	    try{
		// Assurez-vous que l'hôte est correct
		// et que vous avez un certificat valide
		$ldaphost = "ldaps://ldaps.u-psud.fr/";
		// Connexion LDAP
		$ldapconn = ldap_connect($ldaphost, 636) or die("Impossible de se connecter au serveur LDAP {$ldaphost}");
		ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
		if ($ldapconn) {
			$ldaprdn = 'uid='.$this->input->post('login').',ou=people,dc=u-psud,dc=fr';
			$ldappass = $this->input->post('password');
			// binding to ldap server
			$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

			// verify binding
			if ($ldapbind) {
				$connected = true;
			} else {
				$connected = false;
			}
		}
		else { echo "OWNED"; }
		
	    } catch(Exception $e){echo $e->getMessage();}
	    
	    if($connected){
		    if(false != $this->session->userdata('session_id')){
			    $this->session->set_userdata('login', $this->input->post('login'));
			    $PDO = connectSQL();
			    $query = $PDO->prepare('SELECT * FROM cinefips_oscars_users WHERE login = ?');
			    $query->execute(array($this->session->userdata('login')));
			    $res = $query->fetch();
			    $query->closeCursor();
			    if($res == NULL || !$res || count($res)<1){
				$query = $PDO->prepare('INSERT INTO cinefips_oscars_users VALUES(?, ?)');
				$query->execute(array($this->session->userdata('login'), $this->session->userdata('session_id'))) or die($query->errorInfo());
				$query->closeCursor();
				die("inserted!");
			    } else {
				$query = $PDO->prepare('UPDATE cinefips_oscars_users SET session_id = ? WHERE login = ?');
				$query->execute(array($this->session->userdata('session_id'), $this->session->userdata('login'))) or die($query->errorInfo());
				$query->closeCursor();
				die("updated!");
			    }
		    } else {
			    die("aucun session id");
		    }
	    } else {
		    die("impossible de vous connecter avec ces login/password. please retry");
	    }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */