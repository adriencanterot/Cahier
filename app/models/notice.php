<? class Notice extends AppModel {
	var $belongsTo = array('Student');
	
	var $validate = array(
		'text' => array('allowEmpty', false)
	);
	
	function beforeSave() {
		$this->data['Notice']['date'] = date('c');
	}
	
}?>