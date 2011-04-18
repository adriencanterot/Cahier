<?
class Student extends AppModel {
	
	var $hasMany = array("Documents", "Events");
	
	function validate_login($member, $password) {
		
		if($member = $this->find('first', array('conditions' =>array('email' => $member, 'password' => $password)))) {
			return $member;
		} else {
			return -1;
		}
	}
};
?>