
<head>
  <title>Contact Us | JEEVI</title>
  <meta name="description" content="Looking for the best life coaches in Sydney, Australia? Contact us at 13000 JEEVI or you can email us at support@jeevi.com.au. ">
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
        <h1>CONTACT US</h1>
    </div>
</section>
<section class="cp-contact-w">
    <div class="cp-contact-info">
        <div class="cp-contact-info-h">
            <h2>GET IN TOUCH WITH US</h2>
            <p>Please reach out to us using the details below</p>
        </div>
        <div class="cp-contact-info-in">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                    <?php
$result = $db_handle->runQuery("select * from contact");
foreach($result as $row) { ?>
                        <div class="row">
                             <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                                 <div class="cp-contact-info-box">
                                     <span>
                                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                                     </span>
                                     <h3>LOCATE US</h3>
                                     <p><?php echo $row['location'] ?></p>
                                 </div>
                             </div>
                             <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                                 <div class="cp-contact-info-box">
                                     <span>
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                     </span>
                                     <h3>CALL US</h3>
                                     <p><a href="tel: 1300053384"> <?php echo $row['mobilenumber'] ?></a></p>
                                 </div>
                             </div>
                             <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                                 <div class="cp-contact-info-box">
                                     <span>
                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                     </span>
                                     <h3>MAIL US</h3>
                                     <p><a href="mailto:support@jeevi.com.au"><?php echo $row['email'] ?></a></p>
                                 </div>
                             </div>
                         </div> 
                         <?php } ?> 
                    </div>
                </div>   
            </div>  
                        <div class="container" style="margin-top: 3.5rem;">
                <div class="row justify-content-center">
<ul class="social-footer d-flex justify-content-center" style="">
                                     <li> 
                                        <a href="https://www.facebook.com/JEEVIWellbeingServices/" target="_blank" class="icoLinkedin" title="Facebook" style="color: #043259; font-size: 30px; margin-right: 2rem;"><i class="fa fa-facebook" style="color: #043259;"></i></a>
                                        
                                        <a href="https://www.instagram.com/jeevi_australia/" target="_blank" class="icoLinkedin" title="Instagram" style="color: #043259; font-size: 30px; margin-right: 2rem;"><i class="fa fa-instagram" style="color: #043259;"></i></a>
                                        
                                        <a href="https://www.linkedin.com/company/92888481/admin/" target="_blank" class="icoLinkedin" title="Linkedin" style="color: #043259; font-size: 30px;"><i class="fa fa-linkedin"style="color: #043259;"></i></a>
                                        </li>
                                </ul>
                </div>   
            </div>  
        </div>
    </div>
    <div class="cp-contact-form">
        <div class="container">
            <div class="cp-contact-info-h">
                <h2>DROP US A LINE</h2>
                <p>Call us today and begin your new life with the power of positivity</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form method="post" action="send_mail_of_contact_form.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-material">
                                    <input type="text" name="c-name" class="form-control " id="c-name" required="" value="">
                                    <label for="c-name">Your Name*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group input-material">
                                    <input type="text" name="c-phone" class="form-control " id="c-phone" required="" value="">
                                    <label for="c-phone">Email*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input-material">
                                    <input type="text" name="c-brand" class="form-control " id="c-brand" required="" value="">
                                    <label for="c-brand">Phone Number*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-material">
                                    <textarea class="form-control " id="c-additional" value="" name="c-additional"></textarea>
                                    <label for="c-additional">Message*</label>
                                </div>
                            </div>
                        </div>
  
  
   <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Referred by</h3>
                    <div class="c-form-checkbox-w">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheck" value="option1">
                          <label class="form-check-label" for="inlineCheckb"> <span style="color:white">I would like to receive direct marketing from JEEVI Australia about marketing communications about services, offers, promotions and events </span></label>
                        </div>
                        
                    </div>
                </div>
            </div>
            
             <div class="col-md-6">
                <div class="form-group">
                    <h3>Referred by</h3>
                    <div class="c-form-checkbox-w">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option1">
                          <label class="form-check-label" for="inlineCheckbo"><span style="color:white"> I have read and understood the  <a href="#exampleModal"><span type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Privacy Collection Notice.</span></a> </span> </label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                        
           
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <input type="submit" name="" class="c-btn-1" value="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cp-map-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.5128561840556!2d151.20471600000002!3d-33.8764433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae3c9f246f4f%3A0x19a2bf2e1cdebfee!2s714%2F368%20Sussex%20St%2C%20Sydney%20NSW%202000%2C%20Australia!5e0!3m2!1sen!2sin!4v1668056819608!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  >COLLECTION NOTICE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
       <p>JEEVI Australia ABN 21 065 694 839 is collecting your personal information for the purposes of responding to your enquiry.  If you do not provide us with your personal information, we may not be able to resolve your query or provide our services to you.  We may share your personal information
with third parties in order to adequately respond to and resolve your query. These third parties may be located outside Australia, including with our IT services provider located in India and our administrative staff located in the Philippines.  Our privacy policy (available at https://jeevi.com.au/privacy-policy#)
contains information on how you may access your personal information and how you may complain about a breach of the Australian Privacy Principles.
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
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
