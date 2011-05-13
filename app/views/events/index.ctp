<h3>Liste des devoirs</h3>
<table>
	<tr>
		<th>Informations</th>
		<th>Date à rendre</th>
		<th>Etudiant</th>
		<th>Matiere</th>
		<th>Voir</th>
		
	</tr>
	<? foreach($eventlist as $e): ?>
	<tr>
		<td><? echo $e['Event']['name']?></td>
		<td><? echo $date->when($e['Event']['due_date']);?></td>
		<td><? echo $html->link($e['Student']['name'], '/events/view/'.$e['Student']['id']); ?></td>
		<td><? echo $e['Subject']['name']?></td>
		<td>
			<? echo $html->link('Documents liés', '/events/view/'.$e['Event']['id']); ?>
		</td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un Evenement", '/events/add')?>
