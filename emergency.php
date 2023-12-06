<!DOCTYPE html>
<html>
<head>
  <title>Emergency | JEEVI</title>	
  <meta name="description" content="If you or someone you know is in crisis and needs help now, call triple zero (000). You can also call Lifeline on 13 11 14 — 24 hours a day, 7 days a week.">

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
        <h1>Emergency and References</h1>
    </div>
</section>
<section class="cp-emergency-w">
<?php
$result = $db_handle->runQuery("select * from emergency");
foreach($result as $row) { ?>
<section class="c-emegency-w">

    <div class="container">
        <div class="c-emegency-list">
            <div class="row">
                <!--<div class="col-md-6">
                    <div class="c-emegency-con-1">
                    <p><?php echo $row['description']?></p>     
                  </div>
                </div>-->
                <div class="col-md-12">
                    <div class="c-emegency-con-2">
                <p><?php echo $row['description1']?></p>        
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
    <div class="c-support-w">
        <div class="container">
            <h2 class="c-heading-1">SUPPORT &amp; HELP</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="headspace.org.au" target="_">headspace.org.au</a></h3>
                        <p>For young people aged 12 – 25 going through a hard time</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="blackdoginstitute.org.au">blackdoginstitute.org.au</a></h3>
                        <p>Dedicated to improving the lives of people affected by mood disorders.</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="reachout.com">reachout.com</a></h3>
                        <p>An anonymously get access to information and support services 24/7.</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="kidshelp.com.au">kidshelp.com.au</a></h3>
                        <p>A national 24 hour phone counselling for children.</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="lifeline.org.au">lifeline.org.au</a></h3>
                        <p>24*7 Suicide Prevention and Crisis Support.</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="suicideprevenionaust.org">suicideprevenionaust.org</a></h3>
                        <p>National umbrella body.</p>
                    </div>    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="c-support-box">
                        <h3><a href="beyondblue.org.au">beyondblue.org.au</a></h3>
                        <p>Working to address issues associated with depression, anxiety and related substance misuse.</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <?php
$result = $db_handle->runQuery("select * from statistics");
foreach($result as $row) { ?>
<section class="c-according-w">
    <div class="container">
        <div class="c-according-img">
        <img src="./admin/<?php echo $row['statistics'];?>" alt=""> 
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="c-according-con">
                    <h2><?php echo $row['heading']?></h2>
                    <ul>
                        <li><?php echo $row['description']?></li>
                        
                    </ul>
                </div>
            </div>
        </div>    
    </div>
</section>
<?php } ?>
    <div class="c-prevention-w">
        <div class="container">
            <h2>JEEVI believes that Prevention is better than cure
             and aims to help people prevent  different disorders and be psychologically, emotionally and physically fit while Curing any present issues.</h2>
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
