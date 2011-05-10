<div class='notice_form'>
	<? echo $form->create('Notice', array('controller' => 'notices', 'action' => 'add'));
	   echo $form->input('text', array('rows' => 2, 'label' => 'Votre annonce'));
	   echo $form->end('Faire l\'annonce');
	?>
</div>