<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<head>
    <title>Family Flourish | JEEVI</title>
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
            $full_nameErr = "Please enter full name";
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $_REQUEST['full_name'])) {
            $full_nameErr = "Please enter only letters";
        } else {
            $full_name = $_REQUEST['full_name'];
        }

        if ($_REQUEST['residence_suburb'] == "") {
            $residence_suburbErr = "Please enter Residence Suburb";
        } else {
            $residence_suburb = $_REQUEST['residence_suburb'];
        }

        if ($_REQUEST['email'] == "") {
            $emailErr = "Please enter email";
        } else {
            $email = $_REQUEST['email'];
        }

        if (empty($_POST['phone_no'])) {
            $phone_noErr = "Please enter phone number";
        } elseif (!preg_match("/^\d{10}$/", $_POST['phone_no'])) {
            $phone_noErr = "Please enter a valid 10-digit phone number";
        } else {
            $phone_no = $_POST['phone_no'];
        }



        if ($_REQUEST['age'] == "") {
            $ageErr = "Please enter age";
        } else {
            $age = $_REQUEST['age'];
        }


        if ($_REQUEST['number_of_family_members'] == "") {
            $number_of_family_membersErr = "Please enter Number of Family Members";
        } else {
            $number_of_family_members = $_REQUEST['number_of_family_members'];
        }

        if ($_REQUEST['names_and_ages_family_member'] == "") {
            $names_and_ages_family_memberErr = "Please enter Names and Ages of Each Family Member";
        } else {
            $names_and_ages_family_member = $_REQUEST['names_and_ages_family_member'];
        }

        // Challenges Faced by the Family 
        $challenges_faced_by_the_family = isset($_REQUEST['challenges_faced_by_the_family']) ? $_REQUEST['challenges_faced_by_the_family'] : [];

        if (empty($challenges_faced_by_the_family)) {
            $challenges_faced_by_the_familyErr = "Please select any Challenges Faced by the Family ";
        } else {
            $challenges_faced_by_the_family = implode(", ", $_REQUEST['challenges_faced_by_the_family']);
        }

        // Is your partner aware that you are filling out this form? (Yes/No)
    
        $partner_aware_you_filling_form = isset($_REQUEST['partner_aware_you_filling_form']) ? $_REQUEST['partner_aware_you_filling_form'] : null;

        if ($partner_aware_you_filling_form === null) {
            $partner_aware_you_filling_formErr = "Please select any Option";
        } else {
            $partner_aware_you_filling_form = $_REQUEST['partner_aware_you_filling_form'];
        }

        // Is your partner willing to attend this session with you?
    
        $partner_willing_to_attend_session = isset($_REQUEST['partner_willing_to_attend_session']) ? $_REQUEST['partner_willing_to_attend_session'] : null;

        if ($partner_willing_to_attend_session === null) {
            $partner_willing_to_attend_sessionErr = "Please select any Option";
        } else {
            $partner_willing_to_attend_session = $_REQUEST['partner_willing_to_attend_session'];
        }

        // Do you prefer to participate in this session alone or with your partner 
    
        $participate_session_alone = isset($_REQUEST['participate_session_alone']) ? $_REQUEST['participate_session_alone'] : null;

        if ($participate_session_alone === null) {
            $participate_session_aloneErr = "Please select any Option";
        } else {
            $participate_session_alone = $_REQUEST['participate_session_alone'];

        }


        $preferred_contact = isset($_REQUEST['preferred_contact']) ? $_REQUEST['preferred_contact'] : null;

        if ($preferred_contact === null) {
            $preferred_contactErr = "Please select any Channal";
        } else {
            $preferred_contact = implode(", ", $_REQUEST['preferred_contact']);
        }


        if (
            (!@$full_nameErr) &&
            (!@$residence_suburbErr) &&
            (!@$emailErr) &&
            (!@$phone_noErr) &&
            (!@$ageErr) &&
            (!@$number_of_family_membersErr) &&
            (!@$names_and_ages_family_memberErr) &&
            (!@$challenges_faced_by_the_familyErr) &&
            (!@$partner_aware_you_filling_formErr) &&
            (!@$partner_willing_to_attend_sessionErr) &&
            (!@$participate_session_aloneErr) &&
            (!@$preferred_contactErr) &&
            (!@$reCAPTCHAErr)
        ) {

            $sql = "INSERT INTO `family_flourish_form`(`full_name`, `residence_suburb`, `email`, `phone_no`, `age`, `number_of_family_members`, `names_and_ages_family_member`, `challenges_faced_by_the_family`, `partner_aware_you_filling_form`, `partner_willing_to_attend_session`, `participate_session_alone`, `preferred_contact`) VALUES ('$full_name','$residence_suburb','$email','$phone_no','$age','$number_of_family_members','$names_and_ages_family_member','$challenges_faced_by_the_family','$partner_aware_you_filling_form','$partner_willing_to_attend_session','$participate_session_alone','$preferred_contact')";
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
                    $mail->Subject = 'FAMILY FLOURISH FORM - Confirmation Mail';
                    $mail->Body = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Family Flourish Form</h2>          <table style="width: 100%">                        <tr>              <td><strong>Full Name:</strong></td>              <td>' . $full_name . '</td>          </tr>          <tr>              <td><strong>Residence Suburb:</strong></td>              <td>' . $residence_suburb . '</td>          </tr>          <tr>              <td><strong>Email :</strong></td>              <td>' . $email . '</td>          </tr>          <tr>              <td><strong>Phone No :</strong></td>              <td>' . $phone_no . '</td>          </tr>          <tr>              <td><strong>Age:</strong></td>              <td>' . $age . '</td>          </tr>          <tr>              <td><strong>Number of Family Members:</strong></td>              <td>' . $number_of_family_members . '</td>          </tr> </table>        </div>   
                        <p><b>Names and Ages of Each Family Member.</b></p> 
                        <p>' . $names_and_ages_family_member . '</p> <br>  
                        
                        <p><b>Challenges Faced by the Family.</b></p> 
                        <p>' . $challenges_faced_by_the_family . '</p> <br>

                        <p><b>Is your partner aware that you are filling out this form ?</b></p> 
                        <p>' . $partner_aware_you_filling_form . '</p> <br>

                        <p><b>Is your partner willing to attend this session with you ?</b></p> 
                        <p>' . $partner_willing_to_attend_session . '</p> <br>

                        <p><b>Do you prefer to participate in this session alone or with your partner ?</b></p> 
                        <p>' . $participate_session_alone . '</p> <br>
                        
                        <p><b>Preferred method of contact</b></p> 
                        <p>' . $preferred_contact . '</p> <br>

                        </div>    </div>  </main></body></html>';
                    $mail->send();
                } catch (Exception $e) {
                }
                // Data inserted successfully, display success message
    
                $full_name = '';
                $residence_suburb = '';
                $email = '';
                $phone_no = '';
                $age = '';
                $number_of_family_members = '';
                $names_and_ages_family_member = '';
                $challenges_faced_by_the_family = '';
                $partner_aware_you_filling_form = '';
                $partner_willing_to_attend_session = '';
                $participate_session_alone = '';
                $preferred_contact = '';

                ?>

                <script>
                    Swal.fire('Success!', 'Form has been submitted successfully.', 'success')

                    setTimeout(function () {
                        window.location.href = 'Family-Flourish-Form.php';
                    }, 3000); // 3000 milliseconds = 3 seconds
                </script>
                <?php
            }

        }

    }


    ?>

    <section class="c-inner-banner-w">
        <div class="container">
            <h1>Family Flourish Form</h1>
        </div>
    </section>
    <section class="cp-form-w">
        <div class="container">
            <div class="row">

                <div class="col-md-12">


                    <div class="form-group">

                        <!-- <h3>Salutations</h3> -->
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <h2 class="mb-3">Personal Details <strong>*</strong></h2>
                            <!-- full name -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Full Name <strong>*</strong> </h3>
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

                                <!-- Residence Suburb -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h3> Residence Suburb <strong>*</strong> </h3>
                                        <input type="text" name="residence_suburb" class="form-control"
                                            value="<?php echo $residence_suburb ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$residence_suburbErr) {
                                                echo $residence_suburbErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <!-- Number of Family Members  -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Email <strong>*</strong> </h3>
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
                                        <h3>Phone No.<strong>*</strong> </h3>
                                        <input type="number" name="phone_no" class="form-control" minlength="10"
                                            maxlength="10" value="<?php echo $phone_no ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$phone_noErr) {
                                                echo $phone_noErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <!--Age -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Age <strong>*</strong> </h3>
                                        <input type="number" name="age" class="form-control"
                                            value="<?php echo $age ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$ageErr) {
                                                echo $ageErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <h3> Family Details <strong>*</strong></h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3> Number of Family Members<strong>*</strong> </h3>
                                        <input type="text" name="number_of_family_members" class="form-control"
                                            value="<?php echo $number_of_family_members ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$number_of_family_membersErr) {
                                                echo $number_of_family_membersErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>


                                <!-- phone -->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h3>Names and Ages of Each Family Member<strong>*</strong> </h3>
                                        <input type="text" name="names_and_ages_family_member" class="form-control"
                                            value="<?php echo $names_and_ages_family_member ?? '' ?>">
                                        <span class="text-danger">
                                            <?php
                                            if (@$names_and_ages_family_memberErr) {
                                                echo $names_and_ages_family_memberErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3>Challenges Faced by the Family (Tick as many boxes as applicable):
                                            <strong>*</strong>
                                        </h3>
                                        <div class="c-form-checkbox-w">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="communicationIssues"
                                                    value="Communication Issues">
                                                <label class="form-check-label">Communication Issues</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="financialStrain" value="Financial Strain">
                                                <label class="form-check-label">Financial Strain</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="relationshipStruggles"
                                                    value="Relationship Struggles">
                                                <label class="form-check-label">Relationship Struggles</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="parentingChallenges"
                                                    value="Parenting Challenges">
                                                <label class="form-check-label">Parenting Challenges</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="stressAndAnxiety" value="Stress and Anxiety">
                                                <label class="form-check-label">Stress and Anxiety</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="workLifeBalance" value="Work-Life Balance">
                                                <label class="form-check-label">Work-Life Balance</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="mentalHealthConcerns"
                                                    value="Mental Health Concerns">
                                                <label class="form-check-label">Mental Health Concerns</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="griefOrLoss" value="Grief or Loss">
                                                <label class="form-check-label">Grief or Loss</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="culturalOrIdentityIssues"
                                                    value="Cultural or Identity Issues">
                                                <label class="form-check-label">Cultural or Identity Issues</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="lackOfUnderstanding"
                                                    value="Lack of Understanding">
                                                <label class="form-check-label">Lack of Understanding</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="angerManagement" value="Anger Management">
                                                <label class="form-check-label">Anger Management</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="challenges_faced_by_the_family[]"
                                                    type="checkbox" id="otherChallenges" value="Other">
                                                <label class="form-check-label">Other (please specify)</label>
                                            </div>

                                        </div>
                                        <span class="text-danger">
                                            <?php
                                            if (@$challenges_faced_by_the_familyErr) {
                                                echo $challenges_faced_by_the_familyErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h3> Is your partner aware that you are filling out this form?
                                            (Yes/No)<strong>*</strong> </h3>
                                        <div class="c-form-checkbox-w">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="partner_aware_you_filling_form"
                                                    type="radio" value="Yes">
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="partner_aware_you_filling_form"
                                                    type="radio" value="No">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            <?php
                                            if (@$partner_aware_you_filling_formErr) {
                                                echo $partner_aware_you_filling_formErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h3>Is your partner willing to attend this session with you?<strong>*</strong>
                                        </h3>
                                        <div class="c-form-checkbox-w">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="partner_willing_to_attend_session"
                                                    type="radio" id="communicationIssues" value="Yes">
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="partner_willing_to_attend_session"
                                                    type="radio" id="communicationIssues" value="No">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            <?php
                                            if (@$partner_willing_to_attend_sessionErr) {
                                                echo $partner_willing_to_attend_sessionErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h3>Do you prefer to participate in this session alone or with your
                                            partner?<strong>*</strong> </h3>
                                        <div class="c-form-checkbox-w">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="participate_session_alone"
                                                    type="radio" id="communicationIssues" value="With Partner">
                                                <label class="form-check-label">With Partner</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="participate_session_alone"
                                                    type="radio" id="communicationIssues" value="Without Partner">
                                                <label class="form-check-label">Without Partner</label>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            <?php
                                            if (@$participate_session_aloneErr) {
                                                echo $participate_session_aloneErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h3>Preferred method of contact <strong>*</strong> </h3>
                                        <div class="c-form-checkbox-w">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="preferred_contact[]"
                                                    type="checkbox" id="communicationIssues" value="Phone">
                                                <label class="form-check-label">Phone </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="preferred_contact[]"
                                                    type="checkbox" id="communicationIssues" value="Email">
                                                <label class="form-check-label">Email</label>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            <?php
                                            if (@$preferred_contactErr) {
                                                echo $preferred_contactErr;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p>Thank you for filling out the form. One of our staff members will contact you soon to
                                    schedule an obligation-free and confidential session. Rest assured that our services
                                    are confidential, and there's no judgment for any situation you may be facing. We're
                                    here to support you.</p>

                            </div>


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