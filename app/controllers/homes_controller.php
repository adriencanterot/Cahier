<?php
class HomesController extends AppController {


	function index() {
		$this->set('lastdocuments', 
		$this->Document->find('list', array('order' => 'date desc', 'limit' => 5)));

	}
}
?>