
<head>
  <title>Mission Statement | JEEVI</title>
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
<section class="c-inner-banner-w">
    <div class="container">
        <h1>OUR MISSION STATEMENT</h1>
    </div>
</section>
<section class="cp-mission-w">
<?php
$result = $db_handle->runQuery("select * from about");
foreach($result as $row) { ?>
    <div class="cp-mission-1">
       <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="c-about-con">
                        <h3>JEEVI’s Mission Is</h3>
                        <ul>
                            <li> Empowering businesses through the integration of psychological insights, soft skills, and strategic management principles, enhancing employee holistic health, nurturing inner strength for emotional resilience, and cultivating a harmonious work environment.</li>
                            
                            <!--<li> Wellbeing, resilience and inner strength among school children, corporates, aging, aged, disabled people and many others.</li>-->

                            <!--<li> To help them reach their goals.</li>-->

                            <!--<li> To empower, enhance and promote the physical, psychological, mental, spiritual, and emotional health to maximise their life satisfaction.</li>-->
                        </ul>    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-about-img">
                        <img src="img/about-mg.jpg" alt="">
                    </div>
                </div>
            </div>
       </div>
    </div>
   <?php } ?>
  <!--  <div class="c-our-vision-w">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                     <div class="c-our-vision-img">
                         <img src="img/vision-img.jpg" alt="">
                     </div>   
                </div>
                <?php
                $result = $db_handle->runQuery("select * from vision");
foreach($result as $row) { ?>
                <div class="col-md-6">
                     <div class="c-our-vision-con">
                         <h3>Our Vision</h3>
                         <p>JEEVI envisions a world in which people from all aged groups, genders and background will have the power to be more confident in handling their emotions, moods and make the most of their lives, opportunities and relationships with themselves and others by being strong, compassionate and respectful internally. </p>
                     </div>   
                </div>
                <?php } ?>
</div>
        </div>
    </div> !-->
    <?php
    $result = $db_handle->runQuery("select * from Statistics");
foreach($result as $row) { ?>
    <div class="c-according-w">
        <div class="container">
            <div class="c-according-img">
                <img src="img/country.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="c-according-con">
                        <h2>According to the Australian Bureau of Statistics, in the 2020-2021,  the Key statistics suggested the following details:</h2>
                        <ul>
                            <li>Over two in five Australians aged 16-85 years (43.7% or 8.6 million people) had experienced a mental disorder at some time in their life</li>
                            <li>One in five (21.4% or 4.2 million people) had a 12-month mental disorder</li>
                            <li>Anxiety was the most common group of 12-month mental disorders (16.8% or 3.3 million people)</li>
                            <li>Almost two in five people (39.6%) aged 16-24 years had a 12-month mental disorder</li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <?php } ?>
      <div class="c-prevention-w">
        <div class="container">
            <h2>JEEVI believes that Prevention is better than cure
             and aims to help people prevent  different disorders and be psychologically, emotionally, spiritually, and physically fit.</h2>
        </div>
    </div>
</section>
<?php include('footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
