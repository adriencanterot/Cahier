<?php
class DocumentsController extends AppController {
	var $scaffold = 'admin';
	function index() {
		$documentlist = $this->Document->find("all", array('order' => 'issue_date desc'));
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
                $doclist =  $this->Document->DocumentElement->find("all", array("conditions" => array('document_id' => $id)));
				$this->set('body', $this->Document->find('first', array('conditions' => array('Document.id' => $id))));
                $this->set('discussion', $this->Discussion->find('all', array('conditions' => array('document_id' => $id))));
		$this->set('doclist', $doclist);
                $this->set('id', $id);
	}
	
	function showbysubject($id) {

	            $this->set('documentlist', $this->Document->find('all', array(
	                'conditions' => array('subject_id' => $id)
	            )));
	            $this->render('index');
	        }
        

}
?>