<?
class Student extends AppModel {
	
	var $hasMany = "Documents";
	
	function validate_login($member, $password) {
		
		if($member = $this->find('first', array('conditions' =>array('email' => $member, 'password' => $password)))) {
			return $member;
		} else {
			return -1;
		}
	}
};
?>