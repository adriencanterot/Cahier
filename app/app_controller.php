<?
class AppController extends Controller {
	var $components = array('Session');
	var $allowance = array();
	
	function beforeFilter() {
		$this->restrict();
                $this->layout = 'homes';
                $this->loadModel('Document');
                $this->loadModel('Event');
                $mydocs = $this->Document->find('all', array('conditions' => array('student_id' => $this->user())));
                $events = $this->Event->find('all');
                $this->set('mydocs', $mydocs);
                $this->set('events', $events);
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
	
}
?>