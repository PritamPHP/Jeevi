<html>
<head>
  <title>Best Employee Wellness Programs | JEEVI</title>
  	<meta name="description" content="Looking for counselling and wellness programs in Sydney? Our community mental health services and best employee wellness programs cater to your needs. Contact us now!">
  	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
<link href="index.php" rel="canonical"/>
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
  
<meta name="google-site-verification" content="tSowFgDOk1U6b6HRTDzCa_DwqYF4dR8vOtgdok2mSHU" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPPWZS4');</script>
<!-- End Google Tag Manager -->
  
</head>
<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPPWZS4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<?php include('header.php');?>
<section class="c-benefit-w">
    <div class="container">
        <div class="c-benefit-hw">
             <h1 style="    font-weight: bold;font-size: 70px;margin-bottom: 15px;">JEEVI </h1>
            <h2>Mental Health and Holistic Wellbeing Services </h2>
            <p>offers a variety of services to help individuals, groups, and organizations  <br> achieve optimal mental and physical health
</p>
        </div>
        <div class="c-benefit-tab">
                <ul class="nav nav-pills" id="benefit-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                  </li>
                  
              </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="benifit-tab-3" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 1");
foreach($result as $row) { ?>
<!--                    <div class="c-benefit-tab-con">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="c-benefit-tab-con-in">-->
<!--                                    <div class="c-benefit-tab-con-box">-->
<!--                                        <h3>Two-day workshop on student wellbeing that includes life coaching, diet coaching, and yoga coaching : </h3>-->
<!--                                        <p>-->
<!--When: At the time agreed by us.<br>-->
<!--Where: At your school or university/online or onsite<br>-->
<!--The fees associated with the workshop are outlined below-->
<!--</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="c-benefit-tab-con-img">-->
<!--                                <img src="./admin/<?php echo $row['image'];?>" alt=""> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <?php } ?>
              </div>
              
     </div>                
    </div>
</section>

<section class="c-benefit-w">
    <div class="container">

        <div class="c-benefit-tab">
                <ul class="nav nav-pills" id="benefit-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active"  data-bs-toggle="pill" data-bs-target="#benifit-tab-1" type="button" role="tab"  aria-selected="true"><span>Inner Strength Development Program</span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#benifit-tab-2" type="button" role="tab"  aria-selected="false"><span>Mental Health and Holistic Wellbeing Programs for 2 days</span></button>
                  </li>
              </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="benifit-tab-1" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 1");
foreach($result as $row) { ?>
                    <div class="c-benefit-tab-con">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                        <h3>Inner Strength Development Program:</h3>
                                        <p><br>
Introducing the Inner Strength Development Program (ISDP) at JEEVI Mental Health and Holistic Wellbeing Services - a holistic approach incorporating life coaching, dietetics, and yoga packages designed to help you cultivate inner strength, achieve balance, and promote overall well-being.
.<br> <br>


      For more details about the program,<a href="Inner-Strength-Development-Program">Please Click Here </a> 


</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-img">
                                <img src="https://www.jeevi.com.au/admin/img/about-mg.webp" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
              </div>
              <div class="tab-pane fade" id="benifit-tab-2" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 2");
foreach($result as $row) { ?>
                    <div class="c-benefit-tab-con">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                    <h3>Mental Health and Holistic Wellbeing Programs for 2 days:</h3>
                                        <p>We offer a range of holistic programs designed to promote well-being among different groups, including employees, families, seniors, patients, communities, and individuals with disabilities. Our programs are tailored to the unique needs of each group and may include mindfulness meditation, stress management techniques, and other holistic approaches to health and wellness.
<br>

<Span style="text-decoration-line: underline;
    font-weight: bold;">Employee Wellbeing Program:</Span>
 Enhance the productivity and morale of your workforce by offering a comprehensive program that includes life coaching, diet consultation, and yoga coaching. <br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Students Wellbeing Program:</span>
Foster a culture of wellness among students by offering a program that includes life coaching, diet consultation, and yoga coaching to help them manage stress, improve focus, and enhance overall wellbeing.
 <br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Patients Wellbeing Program:</span>
 Empower patients to take control of their health by offering a program that includes life coaching, diet consultation, and yoga coaching to support their recovery journey. <br>
 
<span style="text-decoration-line: underline;
    font-weight: bold;">Seniors Wellbeing Program:</span>
 Promote healthy aging and improve quality of life for seniors by offering a program that includes life coaching, diet consultation, and yoga coaching to help them maintain physical, mental, and emotional wellness. <br> 
 
 
<span style="text-decoration-line: underline;
    font-weight: bold;"> Communities Wellbeing Program:</span>
 Strengthen the fabric of your community by offering a program that includes life coaching, diet consultation, and yoga coaching to promote a culture of health and wellness. <br>
 
 <span style="text-decoration-line: underline;
    font-weight: bold;">Individuals Wellbeing Program:</span>
 Empower individuals to take charge of their wellbeing by offering a program that includes life coaching, diet consultation, and yoga coaching to help them achieve their health and wellness goals.
<br>
 
 <span style="text-decoration-line: underline;
    font-weight: bold;">Families Wellbeing Program:</span>
Nurture healthy relationships and foster a sense of togetherness among families by offering a program that includes life coaching, diet consultation, and yoga coaching to improve overall family wellbeing. <br>
 
 <span style="text-decoration-line: underline;
    font-weight: bold;">Wellbeing Program for Differently-abled:</span>
 Offer a specialized program that includes life coaching, diet consultation, and yoga coaching to support the unique needs of differently-abled individuals and help them achieve optimal health and wellbeing.
 <br> <br>
 
     For more details about the program,<a href="Mental-Health-and-Holistic-Wellbeing-Programs-for-2-days">Please Click Here </a> 
 
</p>       
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-img">
                                <img src="./admin/<?php echo $row['image'];?>" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
              </div>
              
        </div>                
    </div>
</section>

<!---->
<br>
        <div class="c-benefit-hw">
            <!--<h2>Conclusion </h2>-->
            <p>At JEEVI Mental Health and Holistic Wellbeing Services, we are committed to providing the highest quality of care to our clients. Contact us today to learn more about how we can help you achieve optimal mental and physical health.



<br>

<br>




</p>
        </div>

<?php include('footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>