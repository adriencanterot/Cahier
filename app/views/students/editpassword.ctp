<h3> Bienvenue sur le Cahier en Ligne </h3>
<p>Bienvenue sur le cahier en ligne de la classe, avant de pouvoir utiliser le service il vous faut changer le mot de passe</p><br/>

<? echo $form->create('Student', array('action' => 'editpassword'));
   echo $form->input('old_password', array('type' => 'password', 'label' => 'Entrez le mot de passe qui vous a été donné'));
    echo $this->Form->input('password', array('label' => "Entrez votre nouveau mot de passe personnel"));
    echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => "Confirmez votre nouveau mot de passe"));
echo $form->end('Modifier le mot de passe');

?>