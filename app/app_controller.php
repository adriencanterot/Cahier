<?
class AppController extends Controller {
	var $components = array('Session', 'RequestHandler');
        var $helpers = array('Js' => array('Jquery'), 'Session', 'Date');
	var $allowance = array();
	
	function beforeFilter() {
            
		$this->restrict();
				if(isset($this->params['admin'])) {
					$this->layout == 'default';
				} else {
					$this->layout = 'homes';
	                
				}
                
                $this->loadblocks();

	}
        
        function event_form() {
            $this->set('subjects', $this->Subject->find('list'));
            $this->set('documents', $this->Document->find('list'));
        }
        
        function loadblocks() {
                $this->loadModel('Subject');
                $this->loadModel('Document');
                $this->loadModel('Event');
                $this->loadModel('Discussion');
                $this->loadModel('Notification');
				$this->loadModel('Notice');
                
                //events
                $this->set('eventelement', $this->Event->find('list'));
                $this->set('notifications', $this->Notification->find('all', array('condition' => array(
                    'id' => $this->user()
                ))));
                
                //documents
                $this->set('mydocs', 
                        $mydocs = $this->Document->find('all', array('conditions' => 
                            array('student_id' => $this->user()))));
                
                //subjects
                $this->set('subjectlist', $this->Subject->find('list'));
                $this->event_form();
        }
		
	function create_session($member) {
		$this->Session->write('current_user', $member['Student']);
	}

        function user($data = '') {
            if($data == '') {
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
        
        function debug($data) {
            $this->set('debug', $data);
        }
	function hash($string) {
		return Security::hash($string, 'sha256', true);
	}
}
?>