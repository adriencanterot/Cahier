<?
class Document extends AppModel {
	
	var $belongsTo = array("Subject", "Student");
	var $hasMany = array("DocumentElement");
	
	function aftersave() {
		if(!empty($this->data['Document']['file'])) {
			$i = 0;
			while(is_dir(WWW_ROOT.'stockage/'.$i)) { $i++; }
			mkdir(WWW_ROOT.'stockage/'.$i);
			
			$o = 0;
			foreach($this->data['Document']['file'] as $file) {
				
				$fileinfo = pathinfo($file['name']);
				$filename = $o.'.'.$fileinfo['extension'];
				$success = move_uploaded_file($file['tmp_name'], WWW_ROOT.'stockage/'.$i.'/'.$filename);
				
				$this->DocumentElement->create();
				$this->DocumentElement->set('document_id', $this->id);
				$this->DocumentElement->set('path', 'stockage/'.$i.'/'.$filename);
				$this->DocumentElement->set('type', $file['type']);
				$this->DocumentElement->set('page_number', $o);
				$this->DocumentElement->save();
				$o++;
				
			}	
		}
		return true;
	}
};
?>