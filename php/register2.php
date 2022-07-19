<?php
include "./connectionDB.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
    if ($_POST['pass'] == $_POST['pass2']) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = sha1($_POST['pass']);
        include "./mail.php";
        if ($sent) {
            $conn->query("INSERT INTO users(name, email, password, rPassword, validateCode)
                VALUES ('$name','$email','$pass','no','$code')") or die($conn->$error);
                echo "Please, check your account to verify your verification code";
        } else {
            echo "email not sent";
        }
    }
} else {
    echo "invalid password";
}
