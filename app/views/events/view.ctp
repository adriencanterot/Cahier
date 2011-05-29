<h2>En <? echo $event['Subject']['name']?>, 
<? echo $event['Event']['name']; ?> à rendre <? echo $date->when($event['Event']['due_date']);?></h2>


<h3> Documents utiles </h3>

<table>
	<tr>
		<th>Devoir</th>
		<th>Élève</th>
		<th>Matière</th>
		<th>Voir</th>
		
	</tr>
	<? foreach($related as $e): ?>
	<tr>
		<td><? echo h($e['Document']['name'])?></td>
		<td><? echo $e['Student']['name']?></td>
		<td><? echo $e['Subject']['name']?></td>
		<td>
			<? echo $html->link('Voir les fichiers', '/documents/view/'.$e['Document']['id']); ?>
		</td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>

<? echo $this->element('discussion', array('discussion' => $discussion, 'event_id' => $id)); ?>

