<?php
// Multiple Recipts
$to  = 'example@example.com' . ', '; // Attention to the coma
//$to .= 'yes@example.com';

// Title
$title = 'Thanks for register';

// Aleatory
$code = rand(100000, 999999);

// Message
$message = '
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account verification</title>
    </head>
    <body>
        <p>Your verify code:</p>
        <p><a href="http://localhost/misitio/email/confirm.php?email='.$email.'">Verify Account </a></p>
        <h2>'.$code.'</h2>
    </body>
</html>
';

// To send an HTML mail, the Content-type header must be set
$header = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$header .= 'From: <uwu@uwu.com>' . "\r\n";

/*
// Aditional Headers
$header .= 'To: Me <Me@example.com>, Me2 <Me2@example.com>' . "\r\n";
$header .= 'Cc: Someone@example.com' . "\r\n";
$header .= 'Bcc: SomeoneElse@example.com' . "\r\n";
*/

// Send
$sent = false;
if(mail($to, $title, $message, $header)){
    $sent = true;
}else {
    echo "Something went wrong";
}
