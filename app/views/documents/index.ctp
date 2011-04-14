<table>
	<tr>
		<th>Name</th>
		<th>Student</th>
		<th>Type</th>
		<th>Subject</th>
		<th>Voir</th>
		
	</tr>
	<? foreach($documentlist as $e): ?>
	<tr>
		<td><? echo $e['Document']['name']?></td>
		<td><? echo $e['Student']['name']?></td>
		<td><? echo $e['Document']['type_id']?></td>
		<td><? echo $e['Subject']['name']?></td>
		<td>
			<? echo $html->link('Voir les fichiers', '/documents/show/'.$e['Document']['id']); ?>
		</td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>
