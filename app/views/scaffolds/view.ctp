<div class="<?php echo $pluralVar;?> view">
<h2><?php printf(__("View %s", true), $singularHumanName); ?></h2>
	<dl>
<?php
$i = 0;
foreach ($scaffoldFields as $_field) {
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $_alias => $_details) {
			if ($_field === $_details['foreignKey']) {
				$isKey = true;
				echo "\t\t<dt{$class}>" . Inflector::humanize($_alias) . "</dt>\n";
				echo "\t\t<dd{$class}>\n\t\t\t" . $this->Html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "\n\t\t&nbsp;</dd>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t<dt{$class}>" . Inflector::humanize($_field) . "</dt>\n";
		echo "\t\t<dd{$class}>\n\t\t\t{${$singularVar}[$modelClass][$_field]}\n&nbsp;\t\t</dd>\n";
	}
}
?>
	</dl>
</div>
