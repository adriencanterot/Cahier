<h3>Remplir le formulaire</h3>
<?
	echo $this->Form->create("Document", array("enctype" => 'multipart/form-data'));
	echo $this->Form->input("name");
	echo $this->Form->input("subject_id");
	echo $this->Form->input("type");
	
?>
<h3>Envoyer le document</h3>
	<div id="file_field">
	  <div id="filefieldcontent"><input type='file' name='data[Document][file][0]' id='DocumentDocument' /><br/><br/></div>	
	  <a href="" id = 'addfilefield' onClick = "addElement(document.getElementById('filefieldcontent')); return false;" > Ajouter une page</a>
	</div>
<?
	echo $this->Form->end("Envoyer le document");
	
	
?>