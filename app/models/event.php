<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Event extends AppModel {
    
    var $hasAndBelongsToMany= "Document";
    var $belongsTo = array("Subject", "Student");
    var $hasMany = array('Discussions');
    
}

?>
