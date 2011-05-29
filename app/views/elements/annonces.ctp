<table>
<?php
    foreach($annonces as $message) {
        echo '<tr><td style="min-width:200px"><strong>'.$message['Student']['name'].'</strong></td><td> '.nl2br(h($message['Notice']['text'])).'</td></tr>';
    }
?>
</table>