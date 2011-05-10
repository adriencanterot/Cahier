<?php
class HomesController extends AppController {


	function index() {
		$this->set('lastdocuments', 
		$this->Document->find('list', array('order' => 'date desc', 'limit' => 5)));
		
		$this->set('lastannonces', $this->Notice->find('all', array('order' => 'date desc', 'limit' => 3)));

	}
}
?>