<table cellpadding="0" cellspacing="0">
<tr>
<?php foreach ($scaffoldFields as $_field):?>
	<th><?php echo $this->Paginator->sort($_field);?></th>
<?php endforeach;?>
	<th><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach (${$pluralVar} as ${$singularVar}):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
echo "\n";
	echo "\t<tr{$class}>\n";
		foreach ($scaffoldFields as $_field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $_alias => $_details) {
					if ($_field === $_details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t" . $this->Html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td>\n\t\t\t" . ${$singularVar}[$modelClass][$_field] . " \n\t\t</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t" . $this->Html->link(__('View', true), array('action' => 'view', ${$singularVar}[$modelClass][$primaryKey])) . "\n";
		echo "\t\t\t" . $this->Html->link(__('Edit', true), array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey])) . "\n";
		echo "\t\t\t" . $this->Html->link(__('Delete', true), array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), null, __('Are you sure you want to delete', true).' #' . ${$singularVar}[$modelClass][$primaryKey]) . "\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

endforeach;
echo "\n";
?>
</table>