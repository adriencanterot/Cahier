<?php
class HomesController extends AppController {


	function index() {
		$this->set('lastdocuments', 
		$this->Document->find('all', array('order' => 'issue_date desc', 'conditions' => array('issue_date >=' => date('c', strtotime('-7 days'))), 'limit' => 5)));
		
		$this->set('lastannonces', $this->Notice->find('all', array('order' => 'issue_date desc', 'limit' => 6)));
		$this->Discussion->recursive = 2;
		$this->set('lastdiscussions', $this->Discussion->find('all', array('order' => 'Discussion.issue_date desc', 'limit' => 4)));
	}
}
?>