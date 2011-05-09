<? class NoticesController extends AppController {
	
	function add() {
		if(!empty($this->data)) {
			$this->data['Notice']['student_id'] = $this->user();
			$this->save();
			$this->notice('Votre annonce a été publiée');
			$this->redirect($this->referer());
		}
	}
}?>