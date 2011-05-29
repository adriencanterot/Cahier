<? echo $html->link('Ajouter un document', '/documents/add', array('class' => 'button'));?><br/>
<br/>
<h3>Liste des derniers documents</h3>

<p>Pour voir un classement par matière, vous pouvez cliquer sur les noms de matières dans le menu de gauche.</p>
<br/>
<table>
	<tr>
		<th>Voir</th>
		
		<th>Titre</th>
		<th>Étudiant</th>
		<th>Date de publication</th>
		<th>Matière</th>
		
	</tr>
	<? foreach($documentlist as $e): ?>
	<tr>
		<td>
			<? echo $html->link('Voir le document', '/documents/view/'.$e['Document']['id']); ?>
		</td>
		<td><? echo h($e['Document']['name'])?></td>
		<td><? echo h($e['Student']['name'])?></td>
		<td><? echo $date->formatteddate($e['Document']['issue_date']);?>
		<td><? echo $e['Subject']['name']?></td>

	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>
