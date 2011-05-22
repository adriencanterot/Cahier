<div id = 'previews'>
	<? $viewer->listpages($doclist);?>
</div>
<? echo $body['Document']['body']; ?>

	
<? echo $this->element('discussion', array('discussion' => $discussion, 'document_id' => $id));?>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>