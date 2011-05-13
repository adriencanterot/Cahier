<div class = 'documentlist'>
<? foreach($documentlist as $element): ?>
	<h4><? echo $html->link($element['Document']['name'], '/documents/show/'.$element['Document']['id'])?> - <? echo $element['Subject']['name']?></h4>
<?endforeach;?>
</div>