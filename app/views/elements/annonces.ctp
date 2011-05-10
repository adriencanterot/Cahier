<?php
    foreach($annonces as $message) {
        echo '<strong>'.$message['Student']['name'].'</strong> '.$message['Notice']['text'].'<br/ >';
    }
?>
