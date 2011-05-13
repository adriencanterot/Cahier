<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Event extends AppModel {
    
    var $hasAndBelongsToMany= "Document";
    var $belongsTo = array("Subject", "Student");
    var $hasMany = array('Discussions');
    
	function beforeSave() {
		if($this->params['action'] != 'edit') {
			$this->data['Event']['issue_date'] = $this->now();
		}
		return true;
	}
}

?>
