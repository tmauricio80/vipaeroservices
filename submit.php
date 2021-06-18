<?php
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
    $mail->addAddress('tmauricio80@gmail.com', 'Mauricio Tovar');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Inquiry in Website : '.$_POST['topic'];

    $message =  $mail->Subject."<br />";
    $message .= 'Company : '.$_POST['company']."<br />";
    $message .= 'Full Name : '.$_POST['full-name']."<br />";
    $message .= 'Email : '.$_POST['email']."<br />";
    $message .= 'Phone : '.$_POST['phone']."<br />";
    $message .= 'Phone : '.$_POST['phone']."<br />";
    $message .= (isset($_POST['itemName'])) ? 'Item Name : '.$_POST['itemName']."<br />" : '';
    $message .= (isset($_POST['partNumber'])) ? 'Part Number : '.$_POST['partNumber']."<br />" : '';
    $message .= (isset($_POST['condition'])) ? 'Condition : '.$_POST['condition']."<br />" : '';
    $message .= (isset($_POST['priority'])) ? 'Priority : '.$_POST['priority']."<br />" : '';
    $mail->Body    = $message;
    $mail->AltBody = $message;
    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
