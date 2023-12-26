<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<head>
    <title>Details to Obligation Free Assessment | JEEVI</title>
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

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, [
                'secret' => $secretKey,
                'response' => $_REQUEST['g-recaptcha-response']
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $verifyResponse = curl_exec($ch);
            curl_close($ch);
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
            $full_nameErr = "Please enter name";
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $_REQUEST['full_name'])) {
            $full_nameErr = "Please enter only letters";
        } else {
            $full_name = $_REQUEST['full_name'];
        }

        if ($_REQUEST['company_name'] == "") {
            $company_nameErr = "Please enter Company name";
        } else {
            $company_name = $_REQUEST['company_name'];
        }

        if ($_REQUEST['company_role'] == "") {
            $company_roleErr = "Please enter company role/position";
        } else {
            $company_role = $_REQUEST['company_role'];
        }

        if ($_REQUEST['department'] == "") {
            $departmentErr = "Please enter Department";
        } else {
            $department = $_REQUEST['department'];
        }

        if ($_REQUEST['number_of_company'] == "") {
            $number_of_companyErr = "Please enter Number of Employees";
        } else {
            $number_of_company = $_REQUEST['number_of_company'];
        }

        if ($_REQUEST['employee_wellbeing'] === "Yes") {
            $employee_wellbeing = $_REQUEST['employee_wellbeing'];
        } else if ($_REQUEST['employee_wellbeing'] === "No") {
            $employee_wellbeing = $_REQUEST['employee_wellbeing'];
        } else {
            $employee_wellbeingErr = "Please enter Yes/No";
        }

        if ($_REQUEST['time_contact'] == "") {
            $time_contactErr = "Please enter Preferred Time for Contact";
        } else {
            $time_contact = $_REQUEST['time_contact'];
        }

        if ($_REQUEST['company_website'] == "") {
            $company_websiteErr = "Please enter Company Website";
        } else {
            $company_website = $_REQUEST['company_website'];
        }

        if ($_REQUEST['working_email'] == "") {
            $working_emailErr = "Please enter email";
        } else {
            $working_email = $_REQUEST['working_email'];
        }



        if (empty($_REQUEST['phone_number'])) {
            $phone_numberErr = "Please enter phone number";
        } elseif (!preg_match("/^\d{10}$/", $_REQUEST['phone_number'])) {
            $phone_numberErr = "Please enter a valid 10-digit phone number";
        } else {
            $phone_number = $_REQUEST['phone_number'];
        }

        if ($_REQUEST['identified_company'] == "") {
            $identified_companyErr = "Please enter identified ofcompany";
        } else {
            $identified_company = $_REQUEST['identified_company'];
        }
        if ($_REQUEST['expectation'] == "") {
            $expectationErr = "Please enter expectation";
        } else {
            $expectation = $_REQUEST['expectation'];
        }
        // die($_REQUEST['phone_number']);
    
        if ((!@$full_nameErr) && (!@$company_nameErr) && (!@$company_roleErr) && (!@$departmentErr) && (!@$number_of_companyErr) && (!@$employee_wellbeingErr) && (!@$time_contactErr) && (!@$company_websiteErr) && (!@$working_emailErr) && (!@$phone_numberErr) && (!@$identified_companyErr) && (!@$expectationErr) && (!@$reCAPTCHAErr)) {

            $sql = "INSERT INTO `obligation_free_assessment_form`(`full_name`, `company_name`, `company_role`, `department`, `number_of_company`, `employee_wellbeing`, `time_contact`, `company_website`, `working_email`, `phone_number`, `identified_company`, `expectation`) VALUES ('$full_name','$company_name','$company_role','$department','$number_of_company','$employee_wellbeing','$time_contact','$company_website','$working_email','$phone_number','$identified_company','$expectation')";
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                die("Insertion failed: " . mysqli_error($conn));
            } else {
                // mail the response
                // ini_set('display_errors',1);
                include_once 'PHPMailer/src/Exception.php';
                include_once 'PHPMailer/src/PHPMailer.php';
                include_once 'PHPMailer/src/SMTP.php';

                // $toemail = "jeeviaustralia@gmail.com";
                $toemail = "pritamphp.quantumitinnovation@gmail.com";
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
                    $mail->Subject = 'Obligation Free Assessment - Confirmation Mail';
                    $mail->Body = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Obligation Free Assessment Form</h2>          <table style="width: 100%">                        <tr>              <td><strong>Full Name:</strong></td>              <td>' . $full_name . '</td>          </tr>          <tr>              <td><strong>Company Name:</strong></td>              <td>' . $company_name . '</td>          </tr>          <tr>              <td><strong>Position/Role:</strong></td>              <td>' . $company_role . '</td>          </tr>          <tr>              <td><strong>Department</strong></td>              <td>' . $department . '</td>          </tr>          <tr>              <td><strong>Number of Employees in Your Company:</strong></td>              <td>' . $number_of_company . '</td>          </tr>          <tr>              <td><strong>time contact:</strong></td>              <td>' . $time_contact . '</td>          </tr>          <tr>              <td><strong>company website:</strong></td>              <td>' . $company_website . '</td>          </tr>          <tr>              <td><strong>working email:</strong></td>              <td>' . $working_email . '</td>          </tr>  <tr>              <td><strong>phone no:</strong></td>              <td>' . $phone_number . '</td>          </tr>           </table>        </div>    <br><p><b>Do You Currently Have an Employee Wellbeing Program in Place? </b></p> <br>
                        <p>' . $employee_wellbeing . '</p><br>  <br><p><b>Identified Needs in Your Company/Business : </b></p> <br>
                        <p>' . $identified_company . '</p><br>  <br><p><b>Expectations and Objectives from JEEVI Mental Health & Holistic Wellbeing Services :</b></p> <br>
                        <p>' . $expectation . '</p><br>     </div>    </div>  </main></body></html>';
                    $mail->send();
                } catch (Exception $e) {
                }
                // Data inserted successfully, display success message
    
                $full_name = "";
                $company_name = "";
                $company_role = "";
                $department = "";
                $number_of_company = "";
                $employee_wellbeing = "";
                $time_contact = "";
                $company_website = "";
                $working_email = "";
                $phone_number = "";
                $identified_company = "";
                $expectation = "";

                ?>

                <script>
                    Swal.fire('Success!', 'Form has been submitted successfully.', 'success')

                    setTimeout(function () {
                        window.location.href = 'Obligation-free-assessment-form.php';
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
                        <p>Thank you for expressing interest in our obligation-free assessment. To assist you better, we
                            kindly ask you to provide the following information </p>
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
                                            value="<?php echo $full_name ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$full_nameErr) {
                                                echo $full_nameErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Organization Name  -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Company Name <strong>*</strong> </h3>
                                        <input type="text" name="company_name" class="form-control"
                                            value="<?php echo $company_name ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$company_nameErr) {
                                                echo $company_nameErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- company_role  -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Your Role in the Company <strong>*</strong> </h3>
                                        <input type="text" name="company_role" class="form-control"
                                            value="<?php echo $company_role ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$company_roleErr) {
                                                echo $company_roleErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Department <strong>*</strong> </h3>
                                        <input type="text" name="department" class="form-control"
                                            value="<?php echo $department ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$departmentErr) {
                                                echo $departmentErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Number of Employees -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3>Number of Employees in Your Company<strong>*</strong> </h3>
                                        <input type="number" name="number_of_company" class="form-control"
                                            minlength="10" maxlength="10"
                                            value="<?php echo $number_of_company ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$number_of_companyErr) {
                                                echo $number_of_companyErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Do You Currently Have an Employee Wellbeing Program in Place? (Yes/No)
                                            <strong>*</strong>
                                        </h3>
                                        <input type="text" name="employee_wellbeing" class="form-control"
                                            value="<?php echo $employee_wellbeing ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$employee_wellbeingErr) {
                                                echo $employee_wellbeingErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Time for Contact -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Preferred Time for Contact <strong>*</strong> </h3>
                                        <input type="text" name="time_contact" class="form-control"
                                            value="<?php echo $time_contact ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$time_contactErr) {
                                                echo $time_contactErr;
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
                                        <input type="text" name="company_website" class="form-control"
                                            value="<?php echo $company_website ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$company_websiteErr) {
                                                echo $company_websiteErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Your Work Email address <strong>*</strong> </h3>
                                        <input type="email" name="working_email" class="form-control"
                                            value="<?php echo $working_email ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$working_emailErr) {
                                                echo $working_emailErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- phone -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3>Your Phone Number<strong>*</strong> </h3>
                                        <input type="number" name="phone_number" class="form-control"
                                            value="<?php echo $phone_number ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$phone_numberErr) {
                                                echo $phone_numberErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- identified_company -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3> Identified Needs in Your Company/Business
                                        <strong>*</strong>
                                    </h3>
                                    <textarea name="identified_company"
                                        class="form-control"><?php echo $identified_company ?? '' ?></textarea>
                                    <span class="text-danger">
                                        <?php
                                        if (@$identified_companyErr) {
                                            echo $identified_companyErr;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3> Expectations and Objectives from JEEVI Mental Health & Holistic Wellbeing
                                        Services
                                        <strong>*</strong>
                                    </h3>
                                    <textarea name="expectation"
                                        class="form-control"><?php echo $expectation ?? '' ?></textarea>
                                    <span class="text-danger">
                                        <?php
                                        if (@$expectationErr) {
                                            echo $expectationErr;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>By providing this information, you're taking the first step towards enhancing the
                                    wellbeing of your team. Rest assured, your details are confidential.</p>
                                <p>
                                    We appreciate your time, and one of our dedicated staff members will be in touch
                                    with you soon to discuss your unique requirements.
                                </p>
                                <p>
                                    Best Regards,
                                </p>
                                <p> JEEVI Mental Health & Holistic Wellbeing Services</p>
                            </div>

                            <!--  -->

                            <div class="g-recaptcha" data-sitekey="<?php echo $sitekey; ?>"></div>

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