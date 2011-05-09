<div id = 'login'>
<h3>Connectez-vous</h3>    
<?php
        echo $session->flash('auth');
        echo $this->Form->create('Student', array('action' => 'login'));
        echo $this->Form->input('email');
        echo $this->Form->input('password', array('label' => 'Mot de passe'));
        echo $this->Form->end('Se connecter');
        echo $this->Html->linK("S'inscrire", '/students/signin');
    ?>
</div>
<div id = 'introduction'>
	<h3>Cahier en ligne</h3>
	<h4>Bienvenue</h4>
	<p>Bienvenue sur le Cahier en ligne de la classe de première S du lycée Condorcet.
	Ce service vous propose de consulter les cours et les devoirs de la classe. Il vous est possible de les commenter pour demander de l'aide ou signaler une erreur.</p><br/>
	
	<h4>Comment se connecter</h4>
	<p>Pour vous connecter à ce service, vous devez être en première S au lycée Condorcet de Sydney. Vos identifiants vous ont été communiqué. Si ce n'est pas le cas, <a href='mailto:adrien.canterot@gmail.com'>contactez l'administrateur</a>.</p>
	<br/>
	<h4 class = 'droite'>Par Adrien Cantérot</h4>
</div>
