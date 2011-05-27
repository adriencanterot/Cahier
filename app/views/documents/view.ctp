<div id = 'previews'>
	<? $viewer->listpages($doclist);?>
</div>
<iframe><? echo $body['Document']['body']; ?></iframe>

	
<? echo $this->element('discussion', array('discussion' => $discussion, 'document_id' => $id));?>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>