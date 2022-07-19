<?php
    $conn = new mysqli('localhost', 'root', '', 'database');
    if($conn -> connect_error){
        die("I can't connect to server");
    }
?>