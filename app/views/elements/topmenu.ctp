
<? echo $this->Html->link("Accueil", "/homes"); ?> |
<? echo $this->Html->link("Documents", "/documents");?> |
<? echo $this->Html->link("Devoirs", "/events"); ?> |
<? echo $this->Html->link("Se deconnecter", "/students/logout"); ?>
<? if($session->read('current_user.auth_level') == 5) { echo ' | '.$html->link('Administration', '/admin/students/index');}?>

