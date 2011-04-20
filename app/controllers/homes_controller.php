<?php
class HomesController extends AppController {

       function beforeFilter() {
           parent::beforeFilter();
            $this->layout = 'homes';
            $this->loadModel('Document');
            $this->loadModel('Event');
        }
	function index() {
		$mydocs = $this->Document->find('all', array('conditions' => array('student_id' => $this->user())));
                $events = $this->Event->find('all');
                $this->set('mydocs', $mydocs);
                $this->set('events', $events);

	}
}
?>