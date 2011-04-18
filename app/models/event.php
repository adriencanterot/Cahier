<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Event extends AppModel {
    
    var $hasAndBelongsToMany= "Documents";
    var $belongsTo = array("Subject", "Student");
    
}

?>
