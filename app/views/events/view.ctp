<h5>Devoir de <? echo $event['Subject']['name']?>, 
<? echo $event['Event']['name']; ?> à rendre <? echo $date->when($event['Event']['due_date']);?></h5>
<h4>Description</h4>
<? echo $event['Event']['description'] ?>

<h3> Documents Lies </h3>

<table>
	<tr>
		<th>Devoir</th>
		<th>Student</th>
		<th>Type</th>
		<th>Subject</th>
		<th>Voir</th>
		
	</tr>
	<? foreach($related as $e): ?>
	<tr>
		<td><? echo $e['Document']['name']?></td>
		<td><? echo $e['Student']['name']?></td>
		<td><? echo $e['Document']['type']?></td>
		<td><? echo $e['Subject']['name']?></td>
		<td>
			<? echo $html->link('Voir les fichiers', '/documents/show/'.$e['Document']['id']); ?>
		</td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>

<? echo $this->element('discussion', array('discussion' => $discussion, 'event_id' => $id)); ?>
