<? foreach($subjectlist as $id => $subject): ?>
    <? echo $this->Html->link($subject, '/documents/showbysubject/'.$id); ?><br>
<?endforeach;?>