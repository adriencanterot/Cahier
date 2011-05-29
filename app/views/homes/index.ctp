<h2>Cahier en ligne</h2>
<p> Bienvenue sur le cahier en ligne, le cahier de la classe de première du lycée condorcet.</p>
<br/>

<h3>Annonces</h3>
<? echo $this->element('annonces', array('annonces' => $lastannonces))?>
<br/>
<a onclick='showhide(".notice_form")'>Faire passer une annonce à la classe</a>
<? echo $this->element('notice_form');?>
	
<div id = 'home'>
	<div id = 'widget1'>
	<h3>Derniers documents</h3>
	<? echo $this->element('documents', array('documentlist' => $lastdocuments))?><br/>
	<? echo $html->link('Ajouter un document', '/documents/add', array('class' => 'button'));?><br/>
	<br/>
	</div>
	<div id = 'widget2'>
	<h3>Dernières discussions</h3>
	<div class = 'content'>
		<ul>
    	<? foreach($lastdiscussions as $e) {
			echo '<li>';
			echo $html->link($e['Student']['name'].' sur '.h($e['Document']['name']).''.h($e['Event']['name']).' en '.$e['Document']['Subject']['name'].''.$e['Event']['Subject']['name'].'',
			'/'.((!empty($e['Document']['name']) ? 'documents' : 'events').'/view/'.(!empty($e['Document']['id']) ? $e['Document']['id'] : $e['Event']['id'])));
			echo '</li>';
}?>
</ul>
	</div>
	<div id = 'widget3'>

       <? //echo $this->element('notifications', array('notifications' => $notifications)); ?>

		
	</div>
	<div id = 'widget4'>
	</div>
</div>
