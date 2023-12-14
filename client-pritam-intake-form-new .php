<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<head>
    <title>Client Intake Form | JEEVI</title>
    <meta name="description"
        content="JEEVI's client intake form is the first step towards getting the personalized and efficient services you need. Fill out the form online and let's get started!">

    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert-bootstrap-4.min.css">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WPPWZS4');</script>
    <!-- End Google Tag Manager -->
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;

        }

        .error {
            color: #FF0001;
        }
    </style>
</head>

<body>

    <script type="text/javascript" src="js/sweetalert2.min.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPPWZS4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('header.php'); ?>
    <?php


    // $host="localhost";
// $user="visaf452_jeevi";
// $password="o)lk=RemY6W3";
// $dbname="visaf452_jeevi";
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "jeevi";
    $conn = mysqli_connect($host, $user, $password, $dbname);
    // session_start();
    
    ?>
    <?php

include_once 'PHPMailer/src/Exception.php';
include_once 'PHPMailer/src/PHPMailer.php';
include_once 'PHPMailer/src/SMTP.php';

$toemail = "pritamphp.quantumitinnovation@gmail.com
";
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = "mail.jeevi.com.au";
    $mail->SMTPAuth = true;
    $mail->Username = 'info@jeevi.com.au';
    $mail->Password = 'Aaf99vI72P9O';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->setFrom('info@jeevi.com.au', 'Jeevi');
    $mail->addAddress($toemail);
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation Mail';
    $mail->Body = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Client Intake form  Information</h2>          <table style="width: 100%">                        <tr>              <td><strong>Full Name:</strong></td>              <td>Pritma</td>          </tr>          <tr>              <td><strong>Organization Name:</strong></td>              <td>Orama</td>          </tr>          <tr>              <td><strong>Position/Role:</strong></td>              <td>Role</td>          </tr>          <tr>              <td><strong>email:</strong></td>              <td>email@com</td>          </tr>          <tr>              <td><strong>phone:</strong></td>              <td>1231231231</td>          </tr>          <tr>              <td><strong>Interested:</strong></td>              <td>hocky</td>          </tr>          <tr>              <td><strong>Email Address:</strong></td>              <td>no send</td>          </tr>          <tr>              <td><strong>hear about:</strong></td>              <td>eye</td>          </tr>             </table>        </div>    Briefly <p><b>describe the main challenges  you are currently facing ?.</b></p> <br>
        <p>wadjw</p>         </div>    </div>  </main></body></html>';
    // $mail->send();
    $mail->addAttachment('file/file1.docx');


    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else { 
        echo 'Message has been sent.'; 
    }
} catch (Exception $e) {
    echo 'Message Exception: '.$e; 
}


    ?>

    <!--modal-->

    <style>
        /*    li {*/
        /*list-style: disc outside none;*/
        /*display: list-item;*/
        /*margin-left: 1em;*/
        /*}*/
        .ul li {
            display: inline;
        }
    </style>
    <!-- Modal -->
   


    <?php include('footer.php'); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery.steps.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript">
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>
    <script>
        function setValue(event) {
            if ($(event.currentTarget).is(":checked")) {
                $(event.currentTarget).val('1')
            } else {
                $(event.currentTarget).val('0')
            }
        }
    </script>

</body>

</html>