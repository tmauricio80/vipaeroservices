<?php

print_r($_POST);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->IsSMTP();
    $mail->Host = "secure.emailsrvr.com";

    // optional
    // used only when SMTP requires authentication
    $mail->SMTPAuth = true;
    $mail->Username = 'info@vipaeroservices.com';
    $mail->Password = getenv('EMAIL_PASSWORD');

    //Recipients
    $mail->setFrom('info@vipaeroservices.com', 'VIP Aeroservices');
//     $mail->addAddress('info@vipaeroservices.com', 'Mauricio Tovar');     //Add a recipient
    $mail->addAddress('knlagarto@yahoo.com', 'Mauricio Tovar');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
