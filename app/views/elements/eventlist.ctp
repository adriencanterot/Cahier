<? foreach($eventlist as $key => $element): ?>
    <? echo $html->link($element, '/events/view/'.$key); ?><br>
<?endforeach;?>