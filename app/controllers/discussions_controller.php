<?php
class DiscussionsController extends AppController {
	
	var $scaffold = 'admin';

	function add() {
            if(!empty($this->data)) {
				$this->data = $this->sanitize($this->data);
                $this->data['Discussion']['student_id'] = $this->user();
                
                $this->Discussion->save($this->data);
                $this->notice('Message poste');
                $studentlist = array();
                if(isset($this->data['Discussion']['event_id'])) {
	
                    $condition = array(array('event_id' => $this->data['Discussion']['event_id']), 
						'NOT' => array('student_id' => $this->user()));
						
					$owner = $this->Event->find('first', array('conditions' => array('Event.id' => $this->data['Discussion']['event_id']), 'fields' => array('student_id')));
					$studentlist[] = $owner['Event']['student_id'];
					
					
					
                } elseif(isset($this->data['Discussion']['document_id'])) {
	
                    $condition = array(array('document_id' => $this->data['Discussion']['document_id']), 
						'NOT' => array('student_id' => $this->user()));
						      
              		$owner = $this->Document->find('first', array('conditions' => 
						array('Document.id' => $this->data['Discussion']['document_id']), 'fields' => array('student_id')));
						
						$studentlist[] = $owner['Document']['student_id'];
						
                }

				$studentlist = array_merge($this->Discussion->find('list', array('conditions' => $condition,
                        'fields' => array('student_id'))), $studentlist);

					
                $this->Notification->send($studentlist, $this->referer(), $this->user('name').' a repondu.');
                
                
                $this->redirect($this->referer());
            }
        }
}
?>