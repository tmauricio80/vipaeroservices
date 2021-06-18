<?php

if (empty($_POST) ||
    empty($_POST['company']) ||
    empty($_POST['full-name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone'])
    ){
    header("Location: https://www.vipaeroservices.com/p");
    die();
}
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
    $mail->addAddress('info@vipaeroservices.com', 'VIP Aeroservices');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Website Inquiry : '.$_POST['topic'];

    $message =  $mail->Subject."<br />";
    $message .= 'Company : '.$_POST['company']."<br />";
    $message .= 'Full Name : '.$_POST['full-name']."<br />";
    $message .= 'Email : '.$_POST['email']."<br />";
    $message .= 'Phone : '.$_POST['phone']."<br />";
    $message .= (!empty($_POST['itemName']) && $_POST['itemName'] !== '') ? 'Item Name : '.$_POST['itemName']."<br />" : '';
    $message .= (!empty($_POST['partNumber']) && $_POST['partNumber'] !== '') ? 'Part Number : '.$_POST['partNumber']."<br />" : '';
    $message .= (!empty($_POST['condition']) && $_POST['condition'] !== '') ? 'Condition : '.$_POST['condition']."<br />" : '';
    $message .= (!empty($_POST['priority']) && $_POST['priority'] !== '') ? 'Priority : '.$_POST['priority']."<br />" : '';
    $mail->Body    = $message;
    $mail->AltBody = $message;
    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
