<?php
class DiscussionsController extends AppController {
	
	var $scaffold = 'admin';

	function add() {
            if(!empty($this->data)) {
				$this->data = $this->sanitize($this->data);
                $this->data['Discussion']['student_id'] = $this->user();
                
                $this->Discussion->save($this->data);
                $this->notice('Message poste');
                
                if(isset($this->data['Discussion']['event_id'])) {
                    $condition = array(array('event_id' => $this->data['Discussion']['event_id']), 'NOT' => array('student_id' => $this->user()));
                } elseif(isset($this->data['Discussion']['document_id'])) {
                    $condition = array(array('document_id' => $this->data['Discussion']['document_id']), 'NOT' => array('student_id' => $this->user()));                    
                }
                $this->Notification->send($this->Discussion->find('list', array('conditions' => $condition,
                        'fields' => array('student_id'))), $this->referer(), $this->user('name').' a repondu.');
                
                
                $this->redirect($this->referer());
            }
        }
}
?>