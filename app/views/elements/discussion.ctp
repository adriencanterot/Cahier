<h3> Discussion </h3>
<table>
<?php
    foreach($discussion as $message) {
        echo '<tr><td><h4>'.$message['Student']['name'].'</h4></td> <td>'.$message['Discussion']['text'].'</td></tr>';
    }
?>
</table>

<? echo $this->Form->create('Discussion', array('url' => '/discussions/add'));
   echo $form->input('text', array('rows' => 2));
   
   if(isset($event_id)) {
        echo $form->input('event_id', array('type' => 'hidden', 'value' => $event_id));
   }
   if(isset($document_id)) {
        echo $form->input('document_id', array('type' => 'hidden', 'value' => $document_id));
   }
   
   echo $form->end('Répondre');
   ?>
