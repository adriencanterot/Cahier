<h3>Liste des devoirs</h3>
<table>
	<tr>
		 <th>Voir</th>
		<th>Informations</th>
		<th>Date à rendre</th>
		<th>Etudiant</th>
		<th>Matiere</th>
		
	</tr>
	<? foreach($eventlist as $e): ?>
	<tr>
		<td>
			<? echo $html->link('Documents liés', '/events/view/'.$e['Event']['id']); ?>
		</td>
		<td><? echo $e['Event']['name']?></td>
		<td><? echo $date->when($e['Event']['due_date'])?></td>
		<td><? echo $e['Student']['name'] ?></td>
		<td><? echo $e['Subject']['name']?></td>

	</tr>
	<? endforeach;?>
	
</table>
