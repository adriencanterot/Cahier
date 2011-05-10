<ul>
<? foreach($eventlist as $key => $element): ?>
    <li><? echo $html->link($element, '/events/view/'.$key); ?></li>
<?endforeach;?>
</ul>