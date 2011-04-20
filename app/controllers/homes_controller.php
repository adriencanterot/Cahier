<?php
class HomesController extends AppController {

       function beforeFilter() {
           parent::beforeFilter();
            $this->layout = 'homes';
        }
	function index() {
		
	}
}
?>