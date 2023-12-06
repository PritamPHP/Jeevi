<?php
ini_set('display_errors',1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once 'PHPMailer/src/Exception.php';
include_once 'PHPMailer/src/PHPMailer.php';
include_once 'PHPMailer/src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salutation=$_POST['inlineRadioOptions'];
    $surname=$_POST['surname'];
    $firstname=$_POST['firstname'];
    $address=$_POST['address'];
    $suburb=$_POST['suburb'];
    $postcode=$_POST['postcode'];
    $mobileno=$_POST['c-brand'];
    $short_description=$_POST['c-additional'];
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = "mail.jeevi.com.au";                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'info@jeevi.com.au';                
        $mail->Password   = 'Aaf99vI72P9O';                    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                   
        $mail->setFrom('info@jeevi.com.au', 'Jeevi');
        $mail->addAddress("support@jeevi.com.au", "Support");     
        $mail->isHTML(true);                                  
        $mail->Subject = 'Details of contact us form of website submitted by '.$name;
        $mail->Body    = 'Name : '.$name.' <br>Mobile Number : '.$mobileno.'<br>Email Id : '.$email.'<br>Message : '.$short_description;
        $mail->send();
        header('Location: ' . 'https://jeevi.com.au/contact-us');
    } catch (Exception $e) {
        header('Location: ' . 'https://jeevi.com.au/contact-us');
    }
    try {
        $mail->isSMTP();
        $mail->Host = "mail.jeevi.com.au";                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'info@jeevi.com.au';                
        $mail->Password   = 'Aaf99vI72P9O';                    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                   
        $mail->setFrom('info@jeevi.com.au', 'Jeevi');
        $mail->addAddress($email, $name);     
        $mail->isHTML(true);                                  
        $mail->Subject = 'Confirmation Mail';
        $mail->Body    = 'Thank you for visiting JEEVI. <br>This is to confirm that your response has been collected. We will call you at the mobile number you provided during business hours, which are Monday through Friday from 9AM to 5PM AEDT, excluding public holidays.';
        $mail->send();
        header('Location: ' . 'https://jeevi.com.au/contact-us');
    } catch (Exception $e) {
        header('Location: ' . 'https://jeevi.com.au/contact-us');
    }
    header('Location: ' . 'https://jeevi.com.au/contact-us');
} 
?>