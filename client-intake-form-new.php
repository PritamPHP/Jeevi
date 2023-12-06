<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>
<head>
  <title>Client Intake Form | JEEVI</title>	
   <meta name="description" content="JEEVI's client intake form is the first step towards getting the personalized and efficient services you need. Fill out the form online and let's get started!">

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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPPWZS4');</script>
<!-- End Google Tag Manager -->
  <style>
  .error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
    
}
.error {color: #FF0001;}  
  </style>
</head>
<body>

<script type="text/javascript" src="js/sweetalert2.min.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPPWZS4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
    
<?php include('header.php');?>
<?php


$host="localhost";
$user="visaf452_jeevi";
$password="o)lk=RemY6W3";
$dbname="visaf452_jeevi";
$conn=mysqli_connect($host,$user,$password,$dbname);
session_start();

?>
<?php


	if(isset($_REQUEST['submit'])){
// 		print_r($_REQUEST);
        $title=$_REQUEST['title'];
		 $name=$_REQUEST['full_name'];
		 $address=$_REQUEST['address'];
		 $suburb=$_REQUEST['suburb'];
		 $state=$_REQUEST['state'];
		 $country=$_REQUEST['country'];
		 $age=$_REQUEST['age'];
		 $email=$_REQUEST['email'];
		 $mobile=$_REQUEST['mobile'];
		 $occupation=$_REQUEST['occupation'];
		 $gender=$_REQUEST['gender'];
		 $method_communication=$_REQUEST['method_communication'];
		 $learn_about=$_REQUEST['learn_about'];
		 $specify=$_REQUEST['specify'];
		 $begin_program=$_REQUEST['begin_program'];
		 $coaching_sessions=$_REQUEST['coaching_sessions'];
		 $participating_coaching=$_REQUEST['participating_coaching'];
         $coaching_interested = implode(", ", $_REQUEST['coaching_interested']);
         $confidentiality=$_REQUEST['confidentialityCheckbox'];
         $privacyPolicyCheckbox=$_REQUEST['privacyPolicyCheckbox'];
        //  $marketingCommunications = $_REQUEST['marketing_communications'] ? 1 : 0;
        // $marketingCommunications = isset($_POST['marketing_communications']) ? $_POST['marketing_communications'] : 0;
        $marketing_communications = $_POST['marketing_communications'];
         $privacyCollectionNoticeCheckbox=$_REQUEST['privacyCollectionNoticeCheckbox'];
         
        //  print_r($coaching_interested);
		

		 if($name  == ""){
		 	 $nameErr = "Please enter name";
		 }else if( !preg_match ("/^[a-zA-Z\s]+$/",$name)) {
		 		 $nameErr = "Please enter only letters";
		 	
		 }
		   if($address  == ""){
		 	 $addressErr = "Please enter  address";
		 }

		  if($suburb  == ""){
		 	 $suburbErr = "Please enter suburb";
		 }
		  if($state  == ""){
		 	 $stateErr = "Please enter state";
		 }
		 if($country  == ""){
		 	 $countryErr = "Please enter country";
		 }
		  if($age  == ""){
		 	 $ageErr = "Please enter age";
		 }
		  if($email  == ""){
		 	 $emailErr = "Please enter email";
		 }
		   if($occupation  == ""){
		 	 $occupationErr = "Please enter occupation";
		 }
		 
		 if ($confidentiality == "") {
        $confidentialityErr = "Please agree to the Confidentiality and Boundaries statement.";
    }
     if ($privacyPolicyCheckbox == "") {
        $privacyPolicyCheckboxErr = "Please agree to the Privacy Policy.";
    }
      if ($privacyCollectionNoticeCheckbox == "") {
        $privacyCollectionNoticeCheckboxErr = "Please acknowledge reading and understanding the Privacy Collection Notice.";
    }

  

		 if((!@$nameErr) && (!@$addressErr) && (!@$suburbErr) && (!@$stateErr) && (!$countryErr) && (!@$ageErr) &&(!@$emailErr) &&(!@$occupationErr)  &&(!@$confidentialityErr) &&(!@$privacyPolicyCheckboxErr) &&(!@$privacyCollectionNoticeCheckboxErr)){
		     
			 $sql = "INSERT INTO client_intake_form(title,full_name,address,suburb,state,country,age,email,mobile,occupation,gender,method_communication,learn_about,specify,begin_program,coaching_sessions,participating_coaching,marketing_communications,coaching_interested) VALUES('".$title."','".$name."','".$address."','".$suburb."','".$state."','".$country."','".$age."','".$email."','".$mobile."','".$occupation."','".$gender."','".$method_communication."','".$learn_about."','".$specify."','".$begin_program."','".$coaching_sessions."','".$participating_coaching."','".$marketing_communications."','".$coaching_interested."')";
		 	$res= mysqli_query($conn,$sql);
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
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'info@jeevi.com.au';                
            $mail->Password   = 'Aaf99vI72P9O';                    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
            $mail->Port       = 465;                                   
            $mail->setFrom('info@jeevi.com.au', 'Jeevi');
            $mail->addAddress($toemail);     
            $mail->isHTML(true);                                  
            $mail->Subject = 'Confirmation Mail';
            $mail->Body    = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Jeevi</title><!-- google fonts --><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link  href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"  rel="stylesheet"/><!-- google icons --><link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"/><style>  * {    margin: 0;    padding: 0;  }  h1,  h2 {    margin-bottom: 1rem;  }  p {    line-height: 22px;    margin-bottom: 1rem;  }  .border-bottom td,  th {    border-bottom: 1px solid #a5a7a9;    th,td {  text-align: left;  padding: 22px 8px;}.container {  width: 100%;  margin-right: auto;  margin-left: auto;}@media (max-width: 430px) {  table h3,  table p {    font-size: 12px !important;  }}@media (min-width: 576px) {  .container {    max-width: 540px;  }}@media (min-width: 768px) {  .container {    max-width: 720px;  }}@media (min-width: 992px) {  .container {    max-width: 960px;  }@media (min-width: 1200px) {  .container {    max-width: 1140px;  }}@media (min-width: 1400px) {  .container {    max-width: 1320px;  }}</style></head><body style="font-family: \'Raleway\', sans-serif; overflow-x: hidden">  <header>    <div style="background-color: #f7f9fc">      <div style="text-align: center; padding: 0.5rem">        <img        src="https://jeevi.com.au/logo.png"          alt="jeevi"          style="height: 90px; width: 200px; margin: 30px 0px 20px"        />      </div>    </div>  </header>  <main>    <div class="container" style="    display: flex;    justify-content: center;padding-top: 1rem;">      <div>                                <div          style="            max-width: 500px;            margin-bottom: 2rem;            padding: 20px;            border-radius: 8px;            background: #1473cc0d;          "        >          <h2 style="text-align: center;">Client Intake form  Information</h2>          <table style="width: 100%">                        <tr>              <td><strong>Full Name:</strong></td>              <td>'.$name.'</td>          </tr>          <tr>              <td><strong>Address:</strong></td>              <td>'.$address.'</td>          </tr>          <tr>              <td><strong>Suburb:</strong></td>              <td>'.$suburb.'</td>          </tr>          <tr>              <td><strong>State:</strong></td>              <td>'.$state.'</td>          </tr>          <tr>              <td><strong>Country:</strong></td>              <td>'.$country.'</td>          </tr>          <tr>              <td><strong>Age:</strong></td>              <td>'.$age.'</td>          </tr>          <tr>              <td><strong>Email Address:</strong></td>              <td>'.$email.'</td>          </tr>          <tr>              <td><strong>Mobile Number:</strong></td>              <td>'.$mobile.'</td>          </tr>          <tr>              <td><strong>Occupation:</strong></td>              <td>'.$occupation.'</td>          </tr>          <tr>              <td><strong>Gender:</strong></td>              <td>'.$gender.'</td>          </tr>          <tr>              <td><strong>Preferred Method of Communication:</strong></td>              <td>'.$method_communication.'</td>          </tr>          <tr>              <td><strong>Learned About Our Program:</strong></td>              <td>'.$learn_about.'</td>          </tr>          <tr>              <td><strong>When Would You Like to Begin:</strong></td>              <td>'.$begin_program.'</td>          </tr>          <tr>              <td><strong>How Frequently Would You Like to Have Coaching Sessions:</strong></td>              <td>'.$coaching_sessions.'</td>          </tr>          <tr>              <td><strong>Can You Commit to Actively Participating:</strong></td>              <td>'.$participating_coaching.'</td>          </tr>          <tr>              <td><strong>Coaching You Are Interested In:</strong></td>              <td>'.$coaching_interested .'</td>          </tr>          </table>        </div>              </div>    </div>  </main></body></html>';
            $mail->send();
        } catch (Exception $e) {
        }
        // Data inserted successfully, display success message
        ?>
        <!--<div class="alert alert-success" role="alert">-->
        <!--    Form has been submitted successfully !-->
        <!--</div>-->
        <script>
        Swal.fire('Success!','Form has been submitted successfully.','success')
        </script>
        <?php
    }
       
}
		 	 
}
		

	?>

<section class="c-inner-banner-w">
    <div class="container">
        <h1>Client Intake Form</h1>
    </div>
</section>
<section class="cp-form-w">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h2>Individual’s Details:</h2>
                </div>
            </div>
             
            <div class="col-md-12">
               
                                   
                <div class="form-group">

                    <h3>Salutations</h3> 
                          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">   
                    <div class="c-form-radio-w">
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="title" id="inlineRadio1" value="mr">
                              <label class="form-check-label" for="inlineRadio1">Mr</label>
                        </div>
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="title" id="inlineRadio2" value="ms">
                              <label class="form-check-label" for="inlineRadio2">Ms</label>
                        </div>
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="title" id="inlineRadio3" value="miss">
                              <label class="form-check-label" for="inlineRadio3">Miss</label>
                        </div>
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="title" id="inlineRadio4" value="mrs">
                              <label class="form-check-label" for="inlineRadio4">Mrs</label>
                        </div>
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="title" id="inlineRadio5" value="mx">
                              <label class="form-check-label" for="inlineRadio5">Mx</label>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          
            
            <div class="col-md-6">
                <div class="form-group">
                    <h3> Full Name <strong>*</strong> </h3>
                    <input type="text" name="full_name" class="form-control" value="<?php echo $name ?>"  >
                   	<span class="text-danger">
					<?php 
					if(@$nameErr){
						echo $nameErr;
					}	
					?>
				</span>
                </div>
            </div> 
   
            <div class="col-md-4">
                <div class="form-group">
                    <h3> Address <strong>*</strong> </h3>
                    <input type="text" name="address" class="form-control"  value="<?php echo $address?>">
                    <span class="text-danger">
					<?php 
					if(@$addressErr){
						echo $addressErr;
					}	
					?>
				</span>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h3>Suburb <strong>*</strong> </h3>
                    <input type="text" name="suburb" class="form-control"  value="<?php echo $suburb ?>" >
                     <span class="text-danger">
					<?php 
					if(@$suburbErr){
						echo $suburbErr;
					}	
					?>
				</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <h3> State <strong>*</strong> </h3>
                    <input type="text" name="state" class="form-control" value="<?php echo $state?>" >
                     <span class="text-danger">
					<?php 
					if(@$stateErr){
						echo $stateErr;
					}	
					?>
				</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <h3> Country <strong>*</strong> </h3>
                    <input type="text" name="country" class="form-control"  value="<?php echo $country ?>" >
                     <span class="text-danger">
					<?php 
					if(@$countryErr){
						echo $countryErr;
					}	
					?>
				</span>
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-md-6">
                <div class="form-group">
                    <h3> Age <strong>*</strong> </h3>
                    <input type="number" name="age" class="form-control"  value="<?php echo $age  ?>" >
                     <span class="text-danger">
					<?php 
					if(@$ageErr){
						echo $ageErr;
					}	
					?>
				</span>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <h3> Email Address <strong>*</strong> </h3>
                    <input type="email" name="email" class="form-control"  value="<?php echo $email ?>" >
                     <span class="text-danger">
					<?php 
					if(@$emailErr){
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
                    <h3> Mobile Number  </h3>
                    <input type="number" name="mobile" class="form-control" >
                </div>
            </div>
          
            <div class="col-md-6">
                <div class="form-group">
                    <h3> Occupation <strong>*</strong> </h3>
                    <input type="text" name="occupation" class="form-control"  value="<?php echo $occupation?>" >
                     <span class="text-danger">
					<?php 
					if(@$occupationErr){
						echo $occupationErr;
					}	
					?>
				</span>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Gender</h3>        
                    <div>
                        <select style="    border: 1px solid #ced4da;width:auto;padding: 7px;border-radius: 0.375rem;" name="gender" id="gender" placeholder="select" >
                             <option value="" selected disabled hidden>Please Select an option</option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                            <option value="Non-Binary"> Non-Binary</option>
                            <option value="Prefer Not To Say">Prefer Not To Say</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h3>What is your preferred method of communication? Please select from the following options: Email or phone?</h3>        
                    <div class="c-form-radio-w">
                        <div class="form-check ">
                              <input class="form-check-input" type="radio" name="method_communication" id="sex1" value="origin1">
                              <label class="form-check-label" for="origin1"> Email </label>
                        </div>
                        <div class="form-check ">
                              <input class="form-check-input" type="radio" name="method_communication" id="origin2" value="option2">
                              <label class="form-check-label" for="origin2"> Phone</label>
                        </div>
                       
                    </div>
                 
                </div>
            </div>
        </div>
        
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>How did you learn about our program? </h3>
                    
                    <div >
                        
                         <select style="border: 1px solid #ced4da;width:auto;padding: 7px;border-radius: 0.375rem;" name="learn_about" id="learn_about" placeholder="select">
                             <option value="" selected disabled hidden>Please Select an option</option>
                            <option value="Word of mouth">Word of mouth</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Insta"> Insta</option>
                            <option value="Linkedin">Linkedin</option>
                            <option value="Google ads">Google ads</option>
                            <option value="Expo">Expo</option>
                        </select>
                        
                    
                    </div>
                </div>
      
            </div>
            <div class="row">
                <div class="col-md-4">
                    
                     <div class="form-group">
                    <h3> if other, please specify </h3>
                    <input type="text" name="specify" class="form-control" >
                </div>
                    
                </div>
               
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h3> When would you like to begin the program?  </h3>
                    <input type="text" name="begin_program" class="form-control" >
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h3> How frequently would you like to have coaching sessions? (Once a week or Fortnight) </h3>
                    <input type="text" name="coaching_sessions" class="form-control" >
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h3> Can you commit to actively participating in the coaching process and completing any agreed-upon tasks? </h3>
                    <input type="text" name="participating_coaching" class="form-control" >
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Coaching You are Interested In: </h3>
                    <div class="c-form-checkbox-w">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="coaching_interested[]" type="checkbox" id="inlineCheckbox1" value="Holistic">
                          <label class="form-check-label" for="inlineCheckbox1">Holistic Wellbeing (includes Life Coaching, Dietetic and Yoga)</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="coaching_interested[]" type="checkbox" id="inlineCheckbox2" value="Life Coaching">
                          <label class="form-check-label" for="inlineCheckbox2">Life Coaching</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="coaching_interested[]" type="checkbox" id="inlineCheckbox2" value="Dietetic">
                          <label class="form-check-label" for="inlineCheckbox3">Dietetic</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="coaching_interested[]" type="checkbox" id="inlineCheckbox2" value="Yoga">
                          <label class="form-check-label" for="inlineCheckbox4">Yoga</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Confidentiality and Boundaries: </h3>
                    <div class="c-form-checkbox-w">
                        
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="confidentialityCheckbox" id="inlineCheckbox2" value="option1">
                          <label class="form-check-label" for="inlineCheckbox2">We value client privacy and maintain strict confidentiality. Personal and sensitive information shared during sessions is kept confidential. We respect professional boundaries and uphold ethical standards. Clear boundaries ensure a safe and respectful environment. By signing this form, you acknowledge and agree to maintain session confidentiality and respect boundaries.</label>
                        </div>
                         <span class="text-danger">
					<?php 
					if(@$confidentialityErr){
						echo $confidentialityErr;
					}	
					?>
				</span>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <h3>Cancellation Policy:</h3>
                    <p>If you need to reschedule or cancel a session, please provide at least 48 hours notice; otherwise, the session fee may still apply. </p>
                </div>
            </div>
        </div>
        
        
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="c-form-checkbox-w">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="privacyPolicyCheckbox" id="inlineCheckbox3" value="option1">
                          <label class="form-check-label" for="inlineCheckbox3"> I agree to the Privacy Policy</label>
                        </div>
                        
                    </div>
                    <span class="text-danger">
					<?php 
					if(@$privacyPolicyCheckboxErr){
						echo $privacyPolicyCheckboxErr;
					}	
					?>
				</span>
                </div>
            </div>
        </div>
        
        
           <div class="row">
           <div class="col-md-6">
    <div class="form-group">
        <div class="c-form-checkbox-w">
            <div class="form-check form-check-inline">
                <!--<input class="form-check-input" type="checkbox" name="marketing_communications" id="inlineCheck" value="1" onclick="setValue(event)">-->
                <input type="checkbox"  class="form-check-input" name="marketing_communications" value="1" /> 
                <label class="form-check-label" for="inlineCheckb"> I would like to receive direct marketing from JEEVI Australia about marketing communications about services, offers, promotions and events</label>
            </div>
        </div>
    </div>
</div>
        </div>
        
        
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="c-form-checkbox-w">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="privacyCollectionNoticeCheckbox" id="inlineCheckbox13" value="option1">
                          <label class="form-check-label" for="inlineCheckbo"> I have read and understood the <a href="#exampleModal"><span type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Privacy Collection Notice.</span></a>  </label>
                        </div>
                       
                    </div>
                     <span class="text-danger">
					<?php 
					if(@$privacyCollectionNoticeCheckboxErr){
						echo $privacyCollectionNoticeCheckboxErr;
					}	
					?>
				</span>
                </div>
            </div>
        </div>
        
        
        
        <div class="row">
            
                <div class="form-group">
                    <p>Thank you for filling out the Client Intake Form. Our team at JEEVI Mental Health and Holistic Wellbeing Services will review your information and connect you with one of our experts who will reach out to you shortly. Our expert will assess your needs and provide you with options that suit your preferences, to help you achieve your mental health and holistic wellbeing goals.</p>
                </div>
      
        </div>
        
  
        
       
         
        <div class="row">
            <div class="col-md-6">
                <input type="submit"  name="submit" class="c-btn-1" value="Submit">
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
.ul li{
  display: inline;
}
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  >COLLECTION NOTICE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>JEEVI Australia ABN 21 065 694 839 collects your personal information for the following purposes:</p>
       <ol>
           <li style="display:list-item">to provide our services;</li>
           <li>to manage and conduct our business;</li>
           <li>to obtain feedback;</li>
           <li>to offer or promote our products or services;.</li>
           <li>to comply with our legal obligations, resolve any disputes and enforce our contracts and rights.</li>
           <li>to allow you to participate in interactive features of our service, when you choose to do so; and</li>
           <li>to notify you about changes to our service.</li>
            
       </ol>
       <p>If you do not provide us with the requested information, we may not be able to assist you with your specific inquiry or request, or provide our services to you. We may share your personal information with third parties in order to conduct our business and deliver our services. These third parties may be located outside Australia, such as our IT services provider located in India and our administrative staff located in the Philippines</p>
       <p>Our privacy policy (available at https://jeevi.com.au/privacy-policy#) includes our contact details,
explains more about the types of personal information we usually collect and how we handle your personal information, as well as how you can seek access to and correction of your personal information, how to make a privacy complaint and how we deal with these complaints.
</p>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>



<?php include('footer.php');?>
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
   function setValue(event){
    if($(event.currentTarget).is(":checked")){
       $(event.currentTarget).val('1')
    }else{
           $(event.currentTarget).val('0')
    }
}
</script>

</body>
</html>
