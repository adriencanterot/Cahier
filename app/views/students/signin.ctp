<h3>Inscription</h3>
<?php
    echo $this->Form->create('Student', array('action' => 'signin'));
    echo $this->Form->input('name', array('label' => "Nom complet"));
    echo $this->Form->input('year', array('label' => "Annee (1re, 2nde..."));
    echo $this->Form->input('email', array('label' => "E-mail"));
    echo $this->Form->input('confirm_email', array('label' => "Confirmez l'e-mail"));
    echo $this->Form->input('password', array('label' => "Mot de passe"));
    echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => "Confirmer mot de passe"));
    echo $this->Form->end("S'inscrire");


?>
