<?php
class StudentsController extends AppController {
	var $scaffold;
	
	function beforeFilter() {
            $this->allow('login', 'signin');
            parent::beforeFilter();
	}
	
	
	function login() {
            $this->layout = 'login';
		if(!empty($this->data)) {
			$member = $this->Student->validate_login($this->data['Student']['email'], $this->data['Student']['password']);
			
			if($member != -1) {
				$this->Session->setFlash('INPUT DOES MATCH');
				$this->create_session($member);
				$this->redirect('/homes');

			} else {
				$this->Session->setFlash("INPUT DOES NOT MATCH");
			}
		}
	}
	
	function logout() {
                $this->layout = 'login';
		$this->Session->destroy();
                $this->Session->setFlash("Vous etes deconnectes");
                $this->redirect("/students/login");
	}

        function signin() {
            $this->layout = 'login';
            if(!empty($this->data)) {
                if($this->Student->save($this->data)) {
                    
			$member = $this->Student->validate_login($this->data['Student']['email'], $this->data['Student']['password']);
			if($member != -1) {
				$this->Session->setFlash('INPUT DOES MATCH');
				$this->create_session($member);
				$this->redirect('/homes');

                         }
                }

            }
        }
}
?>