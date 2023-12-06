<?php
ini_set('error_reporting',1);
$username = $_POST['name'];
$number = $_POST['tel'];
$email = $_POST['email'];
$cars = $_POST['cars'];
$msg = $_POST['message'];
$to = " azib.quantumit@gmail.com";
$subject = "EMERCENCY REPAIRS";



$message = "
<html>
<head>
<title>HENRY'S SERVICES CO</title>
</head>
<body>
<h3>Name: $username</h3>
<p><b>Phone:</b> $number</p>
<p><b>Email:</b> $email</p>
<p><b>Services:</b> $cars</p>
<p><b>Message:</b> $msg</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Reply-To: The Sender <contact@emergencyrepairs247.co.uk>\r\n";
$headers .= "Return-Path: The Sender <contact@emergencyrepairs247.co.uk>\r\n";
$headers .= "From: EMERCENCY REPAIRS LEADS<contact@emergencyrepairs247.co.uk>\r\n";

if (mail($to,$subject,$message,$headers))
{
    echo "<script>window.location='thank-you.php';</script>";
}
else
{
    echo "Error: Message not accepted";
}

?>