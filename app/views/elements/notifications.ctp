<h3> Notifications (<? echo count($notifications);?>)</h3>
<? foreach($notifications as $element) {
    echo $html->link($element['Notification']['text'], $element['Notification']['route']).'<br/ >';
}