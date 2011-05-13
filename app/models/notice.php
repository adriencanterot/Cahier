<? class Notice extends AppModel {
	var $belongsTo = array('Student');
	
	var $validate = array(
		'text' => 'notEmpty'
	);
	
	function beforeSave() {
		if($this->params['action'] != 'edit') {
			$this->data['Notice']['issue_date'] = $this->now();
		}
		return true;
	}
	
}?>