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
            <p>Seniors’ Wellbeing Program   With 2 days workshop <br>Including Life coaching, Diet coaching and Yoga coaching</p>
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
                    <div class="c-benefit-tab-con">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                        <h3>Two day workshop outlines for a Seniors' Wellbeing Program:</h3>
                                        <p>
When: At the time agreed by us.<br>
Where: At your preferred location, retirement village, nursing home or group home/online or onsite
<br>
The fees associated with the workshop are outlined below
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

<section class="c-benefit-w">
    <div class="container">

        <div class="c-benefit-tab">
                <ul class="nav nav-pills" id="benefit-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active"  data-bs-toggle="pill" data-bs-target="#benifit-tab-1" type="button" role="tab"  aria-selected="true"><span>Day 1</span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#benifit-tab-2" type="button" role="tab"  aria-selected="false"><span>Day 2</span></button>
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
                                        <h3>Day 1:</h3>
                                        <p>Welcome and introductions.<br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Session 1:</span>
 Understanding the Aging Process.
<br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Session 2:</span>
Life Coaching for Seniors' Wellbeing.<br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Session 3: </span>
Nutrition and Diet Coaching for Seniors.<br>Lunch break<br>


<span style="text-decoration-line: underline;
    font-weight: bold;">Session 4:</span>
Chair Yoga and Meditation for Seniors' Wellbeing.<br>


<span style="text-decoration-line: underline;
    font-weight: bold;">Session 5:</span>
Stress Management Techniques for Seniors.<br>

Closing remarks

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
                                    <h3>Day 2:</h3>
                                        <p><br>

<Span style="text-decoration-line: underline;
    font-weight: bold;">Session 1:
</Span>
Review and Reflections from Day 1.
 <br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Session 2: </span>
Mindful Movement and Breathing Practices for Seniors.
<br>

<span style="text-decoration-line: underline;
    font-weight: bold;">Session 3: 
</span>
Life Coaching for Maintaining Social Connections.
 <br>
 Lunch break<br>
 
 <span style="text-decoration-line: underline;
    font-weight: bold;">Session 4:
</span>
Gentle Yoga and Relaxation for Seniors' Wellbeing.
 <br>
 
  <span style="text-decoration-line: underline;
    font-weight: bold;">Session 5: 
</span>
Creating a Personalized Wellbeing Plan.
 <br>
 
 
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
            <h2>Closing remarks and Next Steps</h2>
            <p>
The program will be designed to address the unique needs of seniors, with a focus on promoting physical, mental, and emotional wellbeing. Sessions on the aging process, life coaching, nutrition, and chair yoga will provide seniors with the tools and techniques to manage stress, enhance their mood, and improve their physical health. Stress management techniques and mindful movement practices will be emphasized to help seniors maintain their independence and mobility. By the end of the workshop, seniors will have a personalized wellbeing plan that they can continue to use and build upon in their daily lives.



<br>

<br>

<table class="center">
  <tr>
    <th>Company</th>
    <th>Fees*</th>
    <th>Cost/person</th>
  </tr>
  <tr>
    <td>For 10 people</td>
    <td>$1,530</td>
    <td>$15.30</td>
  </tr>
  <tr>
    <td>For 20 people</td>
    <td>$2,550</td>
    <td>$12.75</td>
  </tr>
  
    <tr>
    <td>For 30 people</td>
    <td>$3,060</td>
    <td>$10.20</td>
  </tr>
</table>



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