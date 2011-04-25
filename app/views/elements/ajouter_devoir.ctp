<h4>Ajouter un devoir pour la classe</h4>
<?  echo $this->Form->create('Event', array('action' => 'add'));
    echo $this->Form->input('Event.Name');
    echo $this->Form->input('Event.due_date');
    echo $this->Form->input('Event.subject_id');
    echo $this->Form->end("Ajouter");
    ?>