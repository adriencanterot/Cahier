<table>
	<tr>
		<th>Fichiers</th>

		
	</tr>
	<? foreach($doclist as $e): ?>
	<tr>
		<td><? echo $html->link($e['DocumentElement']['page_number'], '/'.$e['DocumentElement']['path'])?></td>
	</tr>
	<? endforeach;?>
	
</table>
<? echo $this->Html->link("Ajouter un document", '/documents/add')?>