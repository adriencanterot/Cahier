<h3>Connectez-vous</h3>    
<?php
        echo $session->flash('auth');
        echo $this->Form->create('Student', array('action' => 'login'));
        echo $this->Form->input('email');
        echo $this->Form->input('password', array('label' => 'Mot de passe'));
        echo $this->Form->end('Se connecter');
        echo $this->Html->linK("S'inscrire", '/students/signin');
    ?>
