<div class="<?php echo $pluralVar;?> form">
<?php
	echo $this->Form->create();
	echo $this->Form->inputs($scaffoldFields, array('created', 'modified', 'updated'));
	echo $this->Form->end(__('Submit', true));
?>
</div>
