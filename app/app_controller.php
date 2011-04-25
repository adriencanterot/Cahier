<?
class AppController extends Controller {
	var $components = array('Session');
	var $allowance = array();
	
	function beforeFilter() {
		$this->restrict();
                $this->layout = 'homes';
                $this->loadModel('Subject');
                $this->loadModel('Document');
                $this->loadModel('Event');

                
                
                $this->set('mydocs', 
                        $mydocs = $this->Document->find('all', array('conditions' => 
                            array('student_id' => $this->user()))));
                $this->set('events', $this->Event->find('list'));
                $this->set('subjects', $this->Subject->find('list'));
	}
		
	function create_session($member) {
		$this->Session->write('current_user', $member['Student']);
	}

        function user($data = '') {
            if($data == "") {
                return $this->Session->read('current_user.id');
            } else {
                return $this->Session->read('current_user.'.$data);
            }
        }
	
	function restrict() {
		
		if($this->Session->read('current_user') OR in_array($this->params['action'], $this->allowance)) {
			
			return true;
			
		} else {
			
			$this->redirect('/students/login');
			$this->Session->setFlash('YOU ARE NOT ALLOWED TO GET THERE');
		}
	}
	
	function allow() {
		
		foreach(func_get_args() as $action) {
			array_push($this->allowance, $action);
		}
		
		$this->restrict();
	}
        
        function notice($string) {
            $this->Session->setFlash($string);
        }
	
}
?>