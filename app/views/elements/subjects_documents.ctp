<? foreach($subjectlist as $subject): ?>
    <? echo $this->Html->link($subject['Subject']['name'], '/documents/showbysubject/'.$subject['Subject']['id']); ?><br>
<?endforeach;?>