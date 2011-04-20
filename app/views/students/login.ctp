    <?php
        echo $session->flash('auth');
        echo $this->Form->create('Student', array('action' => 'login'));
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->end('Login');
    ?>