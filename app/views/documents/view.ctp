<h2>Document : <? echo $body['Document']['name']?></h2>
<? if($viewer->extradocs($doclist)) {?>
	<div id = 'previews'>
		<h3>Documents supplémentaires</h3>
	<? $viewer->listpages($doclist);?>
</div>
<? }?>
<? echo $viewer->listdocuments($doclist);?>
<? if(!empty($body['Document']['body'])) {?>
<h3>Document principal</h3>

<iframe src = "<? echo $body['Document']['body']?>" width = '100%', height = '500px'></iframe>
<? } ?>

<? echo $this->element('discussion', array('discussion' => $discussion, 'document_id' => $id));?>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>