<a class = 'show_form_link' onclick="showhide('.event_form')">Ajouter un devoir pour la classe</a>
<div class = 'event_form'>
<?  echo $this->Form->create('Event', array('action' => 'add'));
    echo $this->Form->input('name');
    echo $this->Form->input('due_date', array('type' => 'date'));
    echo $this->Form->input('subject_id');
    echo $form->input('Document.Document');

    echo $this->Form->end("Ajouter");
    ?>
</div>

