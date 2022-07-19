<?php
    include "connectionDB.php";

    $email = $_POST['email'];
    $password = sha1($_POST['pass']);

    $res = $conn -> query("SELECT * FROM users 
        WHERE email = '$email' 
        AND password = '$password'
        AND rPassword = 'si'") or die ($conn -> $error);
    
    if( mysqli_num_rows($res) > 0){
        echo "Y'all good";
    } else {
        echo "Invalid password or email, try again";
    }
?>