<?php
    // Multiple Recipts
    $to = 'Papercut@user.com'.','; // Watch the coma
    //$to = 'yes@example.com';

    // Title
    $tittle = 'Thanks for register';

    // Aleatory
    $code = rand(100000, 999999);

    // Message
    $message = '
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Account Verification</title>
            </head>
            <body>
                <p>You verify code:</p>
                <p><a href="http://localhost/misitio/email/confirm.php?email='.$email.'">Verify Account</a></p>
                <h2>'.$code.'</h2>
            </body>
        </html>';

    // To send an HTML mail, the Content-Type header must be set
    $header = 'MIME-Version 1.0'."\r\n";
    $header .= 'Content-type:text/html;
               charset=iso-8859-1'."\r\n";
    $header .= 'From: <Papercut@papercut.com>'."\r\n";

    /*
    // Aditional Header
    $header .= 'To: Me <Me@examploe.com>, Me2 <Me2@example.com>'."\r\n";
    $header .= 'Cc: mail@example.com'."\r\n";
    $header .= 'Bcc: mail@example.com'."\r\n";
    */

    // Send
    $sent = false;
    if(mail($to, $tittle, $message, $header)){
        $sent = true;
    } else {
        echo "Something went worng";
    }
?>