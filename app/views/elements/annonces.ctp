<table>
<?php
    foreach($annonces as $message) {
        echo '<tr><td style="min-width:200px"><strong>'.$message['Student']['name'].'</strong><br/>'.$date->whattime($message['Notice']['issue_date']).'</td><td> '.nl2br(h($message['Notice']['text'])).'</td></tr>';
    }
?>
</table>