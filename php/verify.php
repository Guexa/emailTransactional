<?php 
    include "./connectionDB.php";

    $email = $_POST['email'];
    $code = $_Post['code'];

    $res = $conn -> query("SELECT * FROM users WHERE email = '$email' AND validateCode = '$code'") 
                    or die($conn -> $error);

    if(mysqli_num_rows($res) > 0){
        $conn -> query("UPDATE users SET rPassword = 'yes' WHERE email = '$email'");
        echo 'Succesfully you can <a href="../login.php">Login</a>';
    } else {
        echo "Invalid code";
    }
?>