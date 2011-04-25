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
    
    function add() {
		
	if(!empty($this->data)) {
		$this->data['Event']['student_id'] = $this->user();
		if($this->Event->save($this->data)) {
			$this->notice("Devoir posté");
		}
	}
	
    }
}
?>
