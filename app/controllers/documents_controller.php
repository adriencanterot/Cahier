<?php
class DocumentsController extends AppController {
	
	function index() {
		$documentlist = $this->Document->find("all");
		$this->set('documentlist', $documentlist);
	}
	
	function add() {
		
		if(!empty($this->data)) {
			$this->data['Document']['student_id'] = $this->user();
			if($this->Document->save($this->data)) {
				$this->flash("Votre document a été envoyé, toute la classe peut désormais le voir", '/documents/index');
			}
		}
	
		$this->set("subjects", $this->Document->Subject->find('list'));
	}
	
	function show($id) {
		$this->set('doclist', $this->Document->DocumentElement->find("all", array("conditions" => array('document_id' => $id))));
	}
        
        function showbysubject($id) {
            $this->set('documentlist', $this->Document->find('all', array(
                'conditions' => array('subject_id' => $id)
            )));
        }
}
?>