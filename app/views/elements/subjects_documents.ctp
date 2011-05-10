<ul>
<? foreach($subjectlist as $id => $subject): ?>
    <li><? echo $html->link($subject, '/documents/showbysubject/'.$id); ?></li>
<?endforeach;?>
</ul>