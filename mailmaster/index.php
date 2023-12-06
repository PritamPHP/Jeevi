<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
date_default_timezone_set('Etc/UTC');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


    if(!isset($_REQUEST["k"]) || $_REQUEST["k"]!="mypass") 
    {
        echo "moved to godaddy.com";
        die();
    }

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $_POST['host'];                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $_POST['username'];                     // SMTP username
    $mail->Password   = urldecode($_POST['password']);
    if(!isset($_REQUEST["tlsoff"])) $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = $_POST['port'];                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPOptions = [
							'ssl' => [
							'verify_peer' => false,
							'verify_peer_name' => false,
							'allow_self_signed' => true
								]
	];

    $mail->Helo=$_SERVER['SERVER_NAME'];
    if( isset($_POST['helo']))
    {
        $mail->Helo=$_POST['helo'];
    }
    //Recipients
    $mail->setFrom($_POST['from_email'], $_POST['from_name']);
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($_POST['to_mail']);               // Name is optional
    $mail->addReplyTo($_POST['from_email'], $_POST['from_name']);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
       

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Body    = $_POST['message'];
    $mail->Subject = $_POST['subject'];
    if( isset($_POST['text']))
    {
        $mail->isHTML(false);
        $mail->ContentType = 'text/plain'; 
    }
    else 
    {
        $mail->AltBody = $_POST['message'];
    }   
    
    $mail->send();
    echo 'OK';
} catch (Exception $e) {
    echo $mail->ErrorInfo;
}