<?php
class StudentsController extends AppController {
	var $scaffold = 'admin';
	
	function beforeFilter() {
            $this->allow('login', 'signin');
			$this->Student->params = $this->params;
            parent::beforeFilter();
	}
	
	
	function login() {
            $this->layout = 'login';
			$this->loadModel('Visit');
		if(!empty($this->data)) {
			$member = $this->Student->validate_login($this->data['Student']['email'], $this->data['Student']['password']);
			
			if($member != -1) {
				$this->Session->setFlash('Vous êtes connecté');
				$this->create_session($member);
				$this->Visit->add($member);
				$this->redirect('/homes');

			} else {
				$this->Session->setFlash("La combinaison email/mot de passe ne marche pas");
			}
		}
	}
	
	function logout() {
                $this->layout = 'login';
		$this->Session->destroy();
                $this->Session->setFlash("Vous êtes déconnecté.");
                $this->redirect("/students/login");
	}


	function editpassword() {
		if(!empty($this->data)) {
			$this->Student->id = $this->user();
			if($this->hash($this->data['Student']['old_password']) == $this->user('password') AND $this->data['Student']['password'] == $this->data['Student']['confirm_password'] AND !empty($this->data['Student']['password'])) {
				$this->data['Student']['auth_level'] = 1;
				$this->Student->save($this->data,array(), array('password'));
				$this->Session->write('current_user.auth_level', '1');
				$this->notice("Votre mot de passe à été change");
				$this->redirect('/homes/');
			} else {
				$this->notice("Une erreur est survenue");
			}
			
		}
	}
}
?>