<? echo $html->link('Ajouter un document', '/documents/add', array('class' => 'button'));?><br/>
<br/>
<h3>Liste des derniers documents</h3>

<p>Pour voir un classement par matière, vous pouvez cliquer sur les noms de matières dans le menu de gauche.</p>
<br/>
<table>
	<tr>
		<th>Titre</th>
		<th>Étudiant</th>
		<th>Date de publication</th>
		<th>Type</th>
		<th>Matière</th>
		<th>Voir</th>
		
	</tr>
	<? foreach($documentlist as $e): ?>
	<tr>
		<td><? echo $e['Document']['name']?></td>
		<td><? echo $e['Student']['name']?></td>
		<td><? echo $date->formatteddate($e['Document']['issue_date']);?>
		<td><? echo $e['Document']['type']?></td>
		<td><? echo $e['Subject']['name']?></td>
		<td>
			<? echo $html->link('Voir les fichiers', '/documents/view/'.$e['Document']['id']); ?>
		</td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>
