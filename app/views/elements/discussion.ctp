<h3> Discussion </h3>
<?php
    foreach($discussion as $message) {
        echo '<h4>'.$message['Student']['name'].'</h4> '.$message['Discussion']['text'].'<br/ >';
    }
?>

<? echo $this->Form->create('Discussion', array('url' => '/discussions/add'));
   echo $form->input('text');
   
   if(isset($event_id)) {
        echo $form->input('event_id', array('type' => 'hidden', 'value' => $event_id));
   }
   if(isset($document_id)) {
        echo $form->input('document_id', array('type' => 'hidden', 'value' => $document_id));
   }
   
   echo $form->end('Envoyer');
   ?>
