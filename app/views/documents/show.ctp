<table>
	<tr>
		<th>Fichiers</th>

		
	</tr>
	<? foreach($doclist as $e): ?>
	<tr>
		<td><? echo $html->link('Page '.($e['DocumentElement']['page_number']+1), '/'.$e['DocumentElement']['path'])?></td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>