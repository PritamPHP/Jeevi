<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<head>
    <title>JEEVI</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="index.php" rel="canonical" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert-bootstrap-4.min.css">



    <style>
        #img1 {
            background: url(https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/file-uploads/themes/2151076197/settings_images/60f22dd-7a25-7d70-ec2-3e6d7fbd3ed_53941389-111a-4d54-bf53-64c033d2d5e9.png);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding: 200px 37px;
            margin-bottom: -4rem;

        }



        #img2 {
            background: url('https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/file-uploads/themes/2151076197/settings_images/e1b7467-ce1b-6661-1de1-f2b041605_111_1.png');
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center;
            padding: 215px 37px;



        }

        #img3 {
            background: url('https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/file-uploads/themes/2151076197/settings_images/f72042b-2e17-dc52-4e3d-ff4722b05b1f_22_2.png');
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center;
            padding: 215px 37px;

        }

        .read-more-btn {
            background-color: #043259;
            border: none;
            padding: 10px 15px;
            color: #fff;
            margin-top: 10px;
            cursor: pointer;
            margin: auto;
        }

        #h2,
        #h3 {
            font-weight: 800;
            font-size: 21px;
            line-height: 42px;
            width: 100%;
        }

        #h1 {
            font-weight: 800;
            font-size: 40px;
            line-height: 42px;
            width: 71%;
        }


        #contsecond {

            margin-bottom: -4rem;

        }



        @media(min-width:200px) {
            #secondrow {
                margin-top: -15rem;
                margin-bottom: -4rem;
            }
        }

        @media(max-width:992px) {
            #img1 {
                padding: 80px;
                margin-bottom: 2rem;
            }



            #h2,
            #h3,
            #h1 {
                font-weight: 800;
                font-size: 18px;
                line-height: 28px;
                width: 88%;
            }

            #cont2 {
                margin-top: 2rem;
            }
        }


        @media(max-width:769px) {
            #img1 {
                padding: 9px;
                height: 296px;
                margin-bottom: 3rem;
                background-size: cover;


            }

            #img2 {
                margin-top: 2rem;
                margin-bottom: -23rem;
            }




        }


        @media(max-width:450px) {
            #img3 {
                margin-top: -14rem;
            }

            #img2 {
                margin-top: 0rem;
                margin-bottom: -29rem;
            }

            #img1 {
                padding: 37px;
            }

        }


        #runbtn {
            background-color: #04AA6D;
            color: white;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            padding: 6px 25px;
            margin-top: 4px;
            border-radius: 5px;
            word-spacing: 10px;
        }

        @media(max-width:1206px)and(min-width:1024px) {
            #img1 {
                margin-bottom: -11rem;
                margin-top: -13rem;
            }
        }

        @media(max-width:1024px)and (min-width:960px) {

            #img1 {
                margin-bottom: -14rem;
            }



        }


        @media(max-width:991px) and (min-width:769px) {
            .navbar-collapse.collapse {
                display: none !important;
            }

            #img1 {
                margin-bottom: 4rem;
            }

            #img2 {
                margin-bottom: -22rem;
            }
        }
    </style>

</head>

<body>
<script type="text/javascript" src="js/sweetalert2.min.js"></script>
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

    // print_r($_POST);
    
    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $company_name = $_POST['company_name'];
        $company_role = $_POST['company_role'];




        $sql = "INSERT INTO `user_download_info`(`name`, `email`, `company_name`, `company_role`) VALUES ('$name','$email','$company_name','$company_role')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            die("Insertion failed: " . mysqli_error($conn));
        } else {
            // mail the response
            // ini_set('display_errors',1);
            include_once 'PHPMailer/src/Exception.php';
            include_once 'PHPMailer/src/PHPMailer.php';
            include_once 'PHPMailer/src/SMTP.php';

            $toemail = $email;
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
                $mail->Body = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Material</h2>          <table style="width: 100%">                        <tr>              <td><strong>Name</strong></td>              <td>' . $name . '</td>          </tr>          <tr>              <td><strong>Company Name:</strong></td>              <td>' . $company_name . '</td>          </tr>          <tr>              <td><strong>Position/Role:</strong></td>              <td>' . $company_role . '</td>          </tr>          <tr>              <td><strong>email:</strong></td>              <td>' . $email . '</td>          </tr>           </table>        </div>  
                             </div>    </div>  </main></body></html>';


                if ($id == "1") {
                    $mail->addAttachment('file/file1.docx');
                }
                if ($id == "2") {
                    $mail->addAttachment('file/file2.docx');
                }
                if ($id == "3") {
                    $mail->addAttachment('file/file3.docx');
                }

                $mail->send();


            } catch (Exception $e) {
                echo 'Message Exception: ' . $e;
            }

            ?>

            <script>
                Swal.fire('Success!', 'Material Send successfully.', 'success')

                setTimeout(function () {
                    window.location.href = 'user-download.php';
                }, 3000); // 3000 milliseconds = 3 seconds
            </script>
            <?php
        }

    }




    ?>

    <section class="c-inner-banner-w">
        <div class="container">
            <h1>Free Tools</h1>
        </div>
    </section>

    <br>

    <section>

        <div class="container" id="img1">

            <div class="row" style="gap:5px">

                <div class="col-12">
                    <div class="contant">
                        <h1 id="h1">Meeting Dynamics: Navigating Attachment Styles and Overcoming Challenges</h1>

                        <br><br>

                        <button type="button" class="read-more-btn" data-toggle="modal" data-target="#myModal1">To
                            Access
                            the File, Submit Your Information</button>
                    </div>
                </div>

            </div>



        </div>


        <div class="container" id="contsecond">

            <div id="secondrow">
                <div class='col-sm-12 col-md-6 col-lg-6'>
                    <div class="contant" id="img2">
                        <h1 id="h2" style="">Mastering Meeting Etiquette: Navigating Productive Discussions with
                            Precision</h1>

                        <br><br>

                        <button type="button" class="read-more-btn" data-toggle="modal" data-target="#myModal2">To
                            Access
                            the File, Submit Your Information</button>
                    </div>


                </div>
                <div class='col-sm-12 col-md-6 col-lg-6'>

                    <div class="contant" id="img3">
                        <h1 id="h2">Efficient Daily Plan for Fiscal Success - 30-Day Challenge Worksheet</h1>

                        <br><br>

                        <button type="button" class="read-more-btn" data-toggle="modal" data-target="#myModal3">To
                            Access
                            the File, Submit Your Information</button>
                    </div>

                </div>
            </div>



        </div>



        <!-- Modal 1-->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="display: flex;
    align-items: end;
    justify-content: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h1>Where Should We Send Your Quiz?</h1>

                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" class="form-control" name="id" value="1" required>
                            <br>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <br>

                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <br>
                            <input type="text" class="form-control" placeholder="company name" name="company_name"
                                required>
                            <br>
                            <input type="text" class="form-control" placeholder=" role in the company"
                                name="company_role" required>

                            <br>
                            <input type="submit" id="runbtn" name="submit" value="Submit" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p style="text-align:center;font-weight:bold">Privacy Policy: After you submit your email,
                            you’ll receive the quiz and a few follow-up messages from me. I promise not to inundate you
                            or share your email address! Please only submit your email if this is OK with you.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="display: flex;
    align-items: end;
    justify-content: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h1>Where Should We Send Your Quiz?</h1>

                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" class="form-control" name="id" value="2" required>
                            <br>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <br>

                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <br>
                            <input type="text" class="form-control" placeholder="company name" name="company_name"
                                required>
                            <br>
                            <input type="text" class="form-control" placeholder=" role in the company"
                                name="company_role" required>

                            <br>
                            <input type="submit" id="runbtn" name="submit" value="Submit" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p style="text-align:center;font-weight:bold">Privacy Policy: After you submit your email,
                            you’ll receive the quiz and a few follow-up messages from me. I promise not to inundate you
                            or share your email address! Please only submit your email if this is OK with you.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal 3-->
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="display: flex;
    align-items: end;
    justify-content: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h1>Where Should We Send Your Quiz?</h1>

                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" class="form-control" name="id" value="3" required>
                            <br>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <br>

                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <br>
                            <input type="text" class="form-control" placeholder="company name" name="company_name"
                                required>
                            <br>
                            <input type="text" class="form-control" placeholder=" role in the company"
                                name="company_role" required>

                            <br>
                            <input type="submit" id="runbtn" name="submit" value="Submit" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p style="text-align:center;font-weight:bold">Privacy Policy: After you submit your email,
                            you’ll receive the quiz and a few follow-up messages from me. I promise not to inundate you
                            or share your email address! Please only submit your email if this is OK with you.</p>
                    </div>
                </div>

            </div>
        </div>



    </section>


    <?php include('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>