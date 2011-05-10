<? class NoticesController extends AppController {
	
	function add() {
		if(!empty($this->data)) {
			$this->data['Notice']['student_id'] = $this->user();
			if($this->Notice->save($this->data)) {
				$this->notice("Votre annonce a été publiée");
			}
			$this->redirect($this->referer());
			
		}
	}
}?>