<? class Notice extends AppModel {
	var $belongsTo = array('Student');
	
	var $validate = array(
		'text' => 'notEmpty'
	);
	
	function beforeSave() {
		$this->data['Notice']['date'] = date('c');
		return true;
	}
	
}?>