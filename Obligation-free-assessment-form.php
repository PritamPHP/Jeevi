<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<head>
    <title>Details to Enroll | JEEVI</title>
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


    if (isset($_REQUEST['submit'])) {

        // recaptcha check
        if (isset($_REQUEST['g-recaptcha-response']) && !empty($_REQUEST['g-recaptcha-response'])) {

            $secretKey = "6Lf8SSkpAAAAABHBRPKEIvq1cB2ispqymF294wZ7";

            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_REQUEST['g-recaptcha-response']);

            // Decode JSON data of API response 
            $responseData = json_decode($verifyResponse);

            // If the reCAPTCHA API response is valid 
            if (!$responseData->success) {
                $reCAPTCHAErr = 'Robot verification failed, please try again.';
            }
        } else {
            $reCAPTCHAErr = 'Please check the reCAPTCHA checkbox.';
        }

        //Erros message
        if ($_REQUEST['full_name'] == "") {
            $nameErr = "Please enter name";
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $_REQUEST['full_name'])) {
            $nameErr = "Please enter only letters";
        } else {
            $name = $_REQUEST['full_name'];
        }

        if ($_REQUEST['organization_name'] == "") {
            $organization_nameErr = "Please enter Organization name";
        } else {
            $organization_name = $_REQUEST['organization_name'];
        }

        if ($_REQUEST['position_role'] == "") {
            $position_roleErr = "Please enter Position/Role";
        } else {
            $position_role = $_REQUEST['position_role'];
        }

        if ($_REQUEST['email'] == "") {
            $emailErr = "Please enter email";
        } else {
            $email = $_REQUEST['email'];
        }

        if (empty($_POST['phone'])) {
            $phoneErr = "Please enter phone number";
        } elseif (!preg_match("/^\d{10}$/", $_POST['phone'])) {
            $phoneErr = "Please enter a valid 10-digit phone number";
        } else {
            $phone = $_POST['phone'];
        }



        if ($_REQUEST['describe_challenges'] == "") {
            $describe_challengesErr = "Please enter challenges";
        } else {
            $describe_challenges = $_REQUEST['describe_challenges'];
        }

        $interested = isset($_REQUEST['interested']) ? $_REQUEST['interested'] : [];

        if (empty($interested)) {
            $interestedErr = "Please select any interested";
        } else {
            $interested = implode(", ", $_REQUEST['interested']);
        }

        $hear_about = isset($_REQUEST['hear_about']) ? $_REQUEST['hear_about'] : null;

        if ($hear_about === null) {
            $hear_aboutErr = "Please select any Channal";
        } else {
            $hear_about = $_REQUEST['hear_about'];

        }

        if ((!@$nameErr) && (!@$organization_nameErr) && (!@$position_roleErr) && (!@$emailErr) && (!@$phoneErr) && (!@$describe_challengesErr) && (!@$interestedErr) && (!@$hear_aboutErr) && (!@$reCAPTCHAErr)) {

            $sql = "INSERT INTO `client_intake_form_data`( `full_name`, `organization_name`, `position_role`, `email`, `phone`, `describe_challenges`, `interested`, `hear_about`) VALUES ('$name','$organization_name','$position_role','$email','$phone','$describe_challenges','$interested','$hear_about')";
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                die("Insertion failed: " . mysqli_error($conn));
            } else {
                // mail the response
                // ini_set('display_errors',1);
                include_once 'PHPMailer/src/Exception.php';
                include_once 'PHPMailer/src/PHPMailer.php';
                include_once 'PHPMailer/src/SMTP.php';

                $toemail = "jeeviaustralia@gmail.com";
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
                    $mail->Body = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Client Intake form  Information</h2>          <table style="width: 100%">                        <tr>              <td><strong>Full Name:</strong></td>              <td>' . $name . '</td>          </tr>          <tr>              <td><strong>Organization Name:</strong></td>              <td>' . $organization_name . '</td>          </tr>          <tr>              <td><strong>Position/Role:</strong></td>              <td>' . $position_role . '</td>          </tr>          <tr>              <td><strong>email:</strong></td>              <td>' . $email . '</td>          </tr>          <tr>              <td><strong>phone:</strong></td>              <td>' . $phone . '</td>          </tr>          <tr>              <td><strong>Interested:</strong></td>              <td>' . $interested . '</td>          </tr>          <tr>              <td><strong>Email Address:</strong></td>              <td>' . $email . '</td>          </tr>          <tr>              <td><strong>hear about:</strong></td>              <td>' . $hear_about . '</td>          </tr>             </table>        </div>    Briefly <p><b>describe the main challenges  you are currently facing ?.</b></p> <br>
                        <p>' . $describe_challenges . '</p>         </div>    </div>  </main></body></html>';
                    $mail->send();
                } catch (Exception $e) {
                }
                // Data inserted successfully, display success message
    
                $name = '';
                $organization_name = '';
                $position_role = '';
                $email = '';
                $phone = '';
                $describe_challenges = '';
                $interested = '';
                $hear_about = '';

                ?>
                <!--<div class="alert alert-success" role="alert">-->
                <!--    Form has been submitted successfully !-->
                <!--</div>-->



                <script>
                    Swal.fire('Success!', 'Form has been submitted successfully.', 'success')

                    setTimeout(function () {
                        window.location.href = 'client-intake-form-new.php';
                    }, 3000); // 3000 milliseconds = 3 seconds
                </script>
                <?php
            }

        }

    }


    ?>

    <section class="c-inner-banner-w">
        <div class="container">
            <h1>Obligation free assessment form</h1>
        </div>
    </section>
    <section class="cp-form-w">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <h4>Dear Visitor,</h4>
                        <p>Thank you for expressing interest in our obligation-free assessment. To assist you better, we kindly ask you to provide the following information </p>
                    </div>
                </div>

                <div class="col-md-12">


                    <div class="form-group">

                        <!-- <h3>Salutations</h3> -->
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <!-- full name -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Your Full Name <strong>*</strong> </h3>
                                        <input type="text" name="full_name" class="form-control"
                                            value="<?php echo $name ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$nameErr) {
                                                echo $nameErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Organization Name  -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Company Name <strong>*</strong> </h3>
                                        <input type="text" name="organization_name" class="form-control"
                                            value="<?php echo $organization_name ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$organization_nameErr) {
                                                echo $organization_nameErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- position_role  -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Your Role in the Company <strong>*</strong> </h3>
                                        <input type="text" name="position_role" class="form-control"
                                            value="<?php echo $position_role ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$position_roleErr) {
                                                echo $position_roleErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Department <strong>*</strong> </h3>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $email ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$emailErr) {
                                                echo $emailErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Number of Employees -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3>Number of Employees in Your Company<strong>*</strong> </h3>
                                        <input type="number" name="phone" class="form-control" minlength="10"
                                            maxlength="10" value="<?php echo $phone ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$phoneErr) {
                                                echo $phoneErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Do You Currently Have an Employee Wellbeing Program in Place? (Yes/No) <strong>*</strong> </h3>
                                        <input type="text" name="position_role" class="form-control"
                                            value="<?php echo $position_role ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$position_roleErr) {
                                                echo $position_roleErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Time for Contact -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Preferred Time for Contact <strong>*</strong> </h3>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $email ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$emailErr) {
                                                echo $emailErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Company Website <strong>*</strong> </h3>
                                        <input type="text" name="position_role" class="form-control"
                                            value="<?php echo $position_role ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$position_roleErr) {
                                                echo $position_roleErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Your Work Email address <strong>*</strong> </h3>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $email ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$emailErr) {
                                                echo $emailErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- phone -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3>Your Phone Number<strong>*</strong> </h3>
                                        <input type="number" name="phone" class="form-control" minlength="10"
                                            maxlength="10" value="<?php echo $phone ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$phoneErr) {
                                                echo $phoneErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- describe_challenges -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3> Identified Needs in Your Company/Business
                                        <strong>*</strong>
                                    </h3>
                                    <textarea name="describe_challenges"
                                        class="form-control"><?php echo $describe_challenges ?? '' ?></textarea>
                                    <span class="text-danger">
                                        <?php
                                        if (@$describe_challengesErr) {
                                            echo $describe_challengesErr;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3> Expectations and Objectives from JEEVI Mental Health & Holistic Wellbeing Services
                                        <strong>*</strong>
                                    </h3>
                                    <textarea name="describe_challenges"
                                        class="form-control"><?php echo $describe_challenges ?? '' ?></textarea>
                                    <span class="text-danger">
                                        <?php
                                        if (@$describe_challengesErr) {
                                            echo $describe_challengesErr;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>By providing this information, you're taking the first step towards enhancing the wellbeing of your team. Rest assured, your details are confidential.</p>
                                <p>
                                    We appreciate your time, and one of our dedicated staff members will be in touch with you soon to discuss your unique requirements.
                                </p>
                                <p>
                                    Best Regards,
                                </p>
                                <p> JEEVI Mental Health & Holistic Wellbeing Services</p>
                            </div>

                            <!-- interested -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--<h3>What services are you interested in ?: <strong>*</strong> </h3>-->
                                        <!--<div class="c-form-checkbox-w">-->
                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" name="interested[]" type="checkbox"-->
                                        <!--            id="inlineCheckbox1" value="Counselling and Coaching">-->
                                        <!--        <label class="form-check-label">Counselling and Coaching</label>-->
                                        <!--    </div>-->

                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" name="interested[]" type="checkbox"-->
                                        <!--            id="inlineCheckbox1" value="Yoga Sessions">-->
                                        <!--        <label class="form-check-label">Yoga Sessions</label>-->
                                        <!--    </div>-->

                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" name="interested[]" type="checkbox"-->
                                        <!--            id="inlineCheckbox1" value="Meditation Programs">-->
                                        <!--        <label class="form-check-label">Meditation Programs</label>-->
                                        <!--    </div>-->

                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" name="interested[]" type="checkbox"-->
                                        <!--            id="inlineCheckbox1" value="Nutrition and Diet">-->
                                        <!--        <label class="form-check-label">Nutrition and Diet</label>-->
                                        <!--    </div>-->

                                        <!--    <div class="form-check form-check-inline">-->
                                        <!--        <input class="form-check-input" name="interested[]" type="checkbox"-->
                                        <!--            id="inlineCheckbox1" value="Other">-->
                                        <!--        <label class="form-check-label">Other</label>-->
                                        <!--    </div>-->

                                        <!--</div>-->
                                        <span class="text-danger">
                                            <?php
                                            if (@$interestedErr) {
                                                echo $interestedErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- hear_about -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!--<h3>How did you hear about JEEVI Mental Health & Holistic Wellbeing Services?-->
                                    <!--    <strong>*</strong>-->
                                    <!--</h3>-->
                                    <!--<div class="c-form-radio-w">-->

                                    <!--    <div class="form-check ">-->
                                    <!--        <input class="form-check-input" type="radio" name="hear_about" id="origin1"-->
                                    <!--            value="Word of Mouth">-->
                                    <!--        <label class="form-check-label" for="origin1">Word of Mouth</label>-->
                                    <!--    </div>-->

                                    <!--    <div class="form-check ">-->
                                    <!--        <input class="form-check-input" type="radio" name="hear_about" id="origin2"-->
                                    <!--            value="Online Search">-->
                                    <!--        <label class="form-check-label" for="origin2">Online Search</label>-->
                                    <!--    </div>-->

                                    <!--    <div class="form-check ">-->
                                    <!--        <input class="form-check-input" type="radio" name="hear_about" id="origin2"-->
                                    <!--            value="Social Media">-->
                                    <!--        <label class="form-check-label" for="origin2">Social Media</label>-->
                                    <!--    </div>-->

                                    <!--    <div class="form-check ">-->
                                    <!--        <input class="form-check-input" type="radio" name="hear_about" id="origin2"-->
                                    <!--            value="Referral">-->
                                    <!--        <label class="form-check-label" for="origin2">Referral</label>-->
                                    <!--    </div>-->

                                    <!--</div>-->
                                    <span class="text-danger">
                                        <?php
                                        if (@$hear_aboutErr) {
                                            echo $hear_aboutErr;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>

                            <div class="g-recaptcha" data-sitekey="6Lf8SSkpAAAAAKIHlXcUrbwgpJ55EEiqZbP5nFL-"></div>

                            <span class="text-danger">
                                <?php
                                if (@$reCAPTCHAErr) {
                                    echo $reCAPTCHAErr;
                                }
                                ?>
                            </span>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-md-6">
                    <input type="submit" name="submit" class="c-btn-1" value="Submit">
                </div>
            </div>
        </div>
    </section>

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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">COLLECTION NOTICE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>JEEVI Australia ABN 21 065 694 839 collects your personal information for the following purposes:
                    </p>
                    <ol>
                        <li style="display:list-item">to provide our services;</li>
                        <li>to manage and conduct our business;</li>
                        <li>to obtain feedback;</li>
                        <li>to offer or promote our products or services;.</li>
                        <li>to comply with our legal obligations, resolve any disputes and enforce our contracts and
                            rights.</li>
                        <li>to allow you to participate in interactive features of our service, when you choose to do
                            so; and</li>
                        <li>to notify you about changes to our service.</li>

                    </ol>
                    <p>If you do not provide us with the requested information, we may not be able to assist you with
                        your specific inquiry or request, or provide our services to you. We may share your personal
                        information with third parties in order to conduct our business and deliver our services. These
                        third parties may be located outside Australia, such as our IT services provider located in
                        India and our administrative staff located in the Philippines</p>
                    <p>Our privacy policy (available at https://jeevi.com.au/privacy-policy#) includes our contact
                        details,
                        explains more about the types of personal information we usually collect and how we handle your
                        personal information, as well as how you can seek access to and correction of your personal
                        information, how to make a privacy complaint and how we deal with these complaints.
                    </p>
                </div>
                <!--<div class="modal-footer">-->
                <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>



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