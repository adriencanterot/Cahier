<a class = 'show_form_link' onclick="showhide('.event_form')">Ajouter un devoir pour la classe</a>
<div class = 'event_form'>
<?  echo $this->Form->create('Event', array('action' => 'add'));
	echo $this->Form->input('subject_id', array('label' => 'Matière'));
    echo $this->Form->input('name', array('label' => 'Titre'));
    echo $this->Form->input('due_date', array('class' =>'datepicker', 'type' => 'text', 'label' => 'Pour la date'));
    echo $form->input('Document.Document', array('label' => 'Documents liés'));

    echo $this->Form->end("Ajouter");
    ?>
</div>

