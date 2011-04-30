<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of events_controller
 *
 * @author adrien
 */
class EventsController extends AppController {
    //put your code here
    var $scaffold;
    
    function index() {
        $this->set('eventlist', $this->Event->find('all'));
    }
    
    function add() {
		
	if(!empty($this->data)) {
		$this->data['Event']['student_id'] = $this->user();
		if($this->Event->save($this->data)) {
			$this->notice("Devoir posté");
                        $this->redirect('/homes');
		}
	}
	
    }
    
    function view($id) {
            $event = $this->Document->Event->find('first',array(
                'conditions' => array('Event.id' => $id)));
            $this->set('event', $event);
            $this->set('related', $this->Document->related($event));
            $this->set('id', $id);
            $this->set('discussion', $this->Discussion->find('all', array('conditions' => array('Discussion.event_id' => $id))));
            $this->discussion_type = 'Event';
    }
}
?>
