<? echo $form->create('Student', array('action' => 'editpassword'));
	echo '<h4> Entrez votre ancien mot de passe </h4>';
   echo $form->input('old_password', array('type' => 'password'));
	echo '<h4> Entrez votre nouveau mot de passe </h4>';
    echo $this->Form->input('password', array('label' => "Mot de passe"));
    echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => "Confirmer mot de passe"));
echo $form->end('submit');

?>