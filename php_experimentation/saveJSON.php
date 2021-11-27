<?php
    $data = $_POST["data"];
    
    file_put_contents('info.json', $data);
    
    echo("data saved");
?>