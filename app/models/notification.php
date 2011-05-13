<?php
class Notification extends AppModel {
    function send($to, $action, $description) {
        foreach(array_unique($to) as $student) {
            $this->create();
            $this->set('student_id', $student);
            $this->set('route', $action);
            $this->set('text', $description);
			$this->set('issue_date', $this->now());
            $this->save();
        }
    }
}
?>
