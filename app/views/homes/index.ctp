<h3>Annonces</h3>
<? echo $this->element('annonces', array('annonces' => $lastannonces))?>
<br/>
<a onclick='showhide(".notice_form")'>Faire passer une annonce à la classe</a>
<? echo $this->element('notice_form');?>
	
<div id = 'home'>
	<div id = 'widget1'>
	<h3>Derniers documents</h3>
	<? echo $this->element('documents', array('documentlist' => $lastdocuments))?>
	</div>
	<div id = 'widget2'>
	<h3>Devoirs a faire</h3>
	<div class = 'content'><? echo $this->element('eventlist', array('eventlist' => $eventelement)); ?></div>
    
	</div>
	<div id = 'widget3'>
	<h3>Notifications</h3>
	<? if (count($notifications) != 0) {
        echo $this->element('notifications', array('notifications' => $notifications));
    } else {
	echo "Vous n'avez aucune notification";
}?>
		
	</div>
	<div id = 'widget4'>
	</div>
</div>
