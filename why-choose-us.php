
<head>
  <title>Why Choose Us? | JEEVI</title>
   <meta name="description" content="Looking for qualified & certified life coaches, yoga Practitioners & dietitians? Discover why JEEVI is the right choice for you. Click here to know more about us."> 

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
        <h1>WHY CHOOSE US?</h1>
    </div>
</section>
<br>
<section class="c-why-w">
    <div class="container">
         <div class="row">
         <?php
$result = $db_handle->runQuery("select * from choose");
foreach($result as $row) { ?>
             <div class="col-lg-4 col-md-6">
                <div class="c-why-box">
                     <span>
                     <img src="./admin/<?php echo $row['image'];?>" alt=""> 
                     </span>
                     <h3><?php echo $row['heading']?></h3>
                     <p><?php echo $row['description']?></p>
                 </div>    
             </div>
             <?php } ?>
            
             </div>
         </div>
</section>
<<section class="c-benefit-w">
    <div class="container">
        <div class="c-benefit-hw">
            <h2>The Benefits Of Our Program</h2>
            <p>The program includes different therapies as well as meditation and yogas. The studies suggested that mindfulness and the yoga that we help you with would be greatly beneficial to the people from different age groups and backgrounds in the following ways:</p>
        </div>
        <div class="c-benefit-tab">
                <ul class="nav nav-pills" id="benefit-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active"  data-bs-toggle="pill" data-bs-target="#benifit-tab-1" type="button" role="tab"  aria-selected="true"><span>People of Different Ages</span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#benifit-tab-2" type="button" role="tab"  aria-selected="false"><span>For Seniors</span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#benifit-tab-3" type="button" role="tab"  aria-selected="false"><span>For Children</span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#benifit-tab-4" type="button" role="tab"  aria-selected="false"><span>For Hospital Patients</span></button>
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
                                        <h3><?php echo $row['heading']?></h3>
                                        <p><?php echo $row['description'] ?></p>
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
              <div class="tab-pane fade" id="benifit-tab-2" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 2");
foreach($result as $row) { ?>
                    <div class="c-benefit-tab-con">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                    <h3><?php echo $row['heading']?></h3>
                                        <p><?php echo $row['description'] ?></p>       
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
              <div class="tab-pane fade" id="benifit-tab-3" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 3");
foreach($result as $row) { ?>
                    <div class="c-benefit-tab-con">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                    <h3><?php echo $row['heading']?></h3>
                                        <p><?php echo $row['description'] ?></p>    
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
              <div class="tab-pane fade" id="benifit-tab-4" role="tabpanel" >
              <?php
$result = $db_handle->runQuery("select * from benefit where id = 4");
foreach($result as $row) { ?>
                    <div class="c-benefit-tab-con">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-benefit-tab-con-in">
                                    <div class="c-benefit-tab-con-box">
                                    <h3><?php echo $row['heading']?></h3>
                                        <p><?php echo $row['description'] ?></p>   
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
<br>

<?php include('footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
