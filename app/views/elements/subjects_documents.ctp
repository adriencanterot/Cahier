<? foreach($subjectlist as $id => $subject): ?>
    <? echo $html->link($subject, '/documents/showbysubject/'.$id); ?><br>
<?endforeach;?>
