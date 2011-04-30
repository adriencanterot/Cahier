<?php
class DiscussionsController extends AppController {
	function add() {
            if(!empty($this->data)) {
                $this->data['Discussion']['student_id'] = $this->user();
                
                $this->Discussion->save($this->data);
                $this->notice('Message poste');
                $this->redirect($this->referer());
            }
        }
}
?>