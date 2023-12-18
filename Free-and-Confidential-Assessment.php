<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

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
     <link rel="stylesheet" type="text/css" href="css/custom2.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  
<meta name="google-site-verification" content="tSowFgDOk1U6b6HRTDzCa_DwqYF4dR8vOtgdok2mSHU" />


 




</head>

<body>
<script type="text/javascript" src="js/sweetalert2.min.js"></script>
    

   

     
    <div class="min-h-screen flex flex-col items-center justify-center">
    <div class="w-full relative flex justify-end">
      <img src="./img/inner heading.png" class="w-full h-[90vh] sm:h-[70vh]  lg:h-[60vh] object-cover" alt="Course Image">
      <div class="absolute top-1/2 transform -translate-y-1/2  flex flex-col justify-start items-start text-white p-8">
        <h2 class="text-2xl md:text-5xl font-bold mb-4">Free and Confidential Assessment for YOUR Employees</h2>
        <p class=" text-lg sm:text-xl font-semiold">Effective Management recognizes the importance of supporting employees in their mental health and holistic wellbeing. Why?
        </p>
        <div class="mt-4 w-full flex flex-col md:flex-row justify-center items-center md:justify-start">

        <?php
          include_once './payment/pay-config.php';
          ?>

          <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

            <input type="hidden" value="500" name="amount" id="amount">

            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

            <!-- Specify a Buy Now button. -->
            <input type="hidden" name="cmd" value="_xclick">
            <!-- Specify URLs -->
            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
            <br><br>
            <!-- Display the payment button. -->
            <!-- <input type="submit" name="submit" border="0" value="Paid"> -->
            <button type="submit"
              class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mb-2 md:mb-0 md:mr-2">Enroll
              Now : $500</button>
          </form>

          <!-- <button class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded sm:mb-2 md:mb-0 md:mr-2">Enroll Now : $500</button> -->
          <!-- <button class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Gift this course to a friend</button>-->
          </div> 
      </div>
    </div>
    <hr>
    <div class="mx-[5%] lg:mx-[15%] mt-[50px] text-gray-800">
      
      <hr class="my-5">
    
      <h4 class="text-lg font-bold mt-5">To avoid…</h4>
      <ol class="list-decimal mt-5 ps-6">
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Decreased Productivity:</span>Overworked and burnt-out employees may lead to a decline in productivity.

          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Staff Dissatisfaction:</span> Employee burnout and dissatisfaction can negatively impact team morale.


          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Increased Absenteeism: </span> Overworked employees may take more leaves, affecting overall attendance.


          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> High Turnover:</span> Burnout and dissatisfaction contribute to a higher turnover rate.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Retraining Needs:</span>Constant turnover requires resources for retraining new staff.
          </p>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Negative Mindset:</span>  A negative work environment can hinder positive business outcomes.
          </p>
       
      </ol>
      <div>
        <p class="text-[16px] leading-relaxed mt-5 font-semibold">We assist you in identifying areas where you can provide more support to your staff, enabling them to:</p>
        <ul class="mt-5 list-decimal ps-6">
          <li>
            <p class="text-[14px] leading-relaxed">Perform at Their Best</p>
          </li>
          <li>
            <p class="text-[14px] leading-relaxed">Remain Happy</p>
          </li>
          <li>
            <p class="text-[14px] leading-relaxed">Build Resilience Consistently</p>
          </li>
          <li>
            <p class="text-[14px] leading-relaxed">Many other benefits</p>
          </li>
        </ul>
      </div>
      <div>
          <h4 class="text-lg font-bold mt-5">Why Choose Our Total Empowerment Audit?</h4>
      <ol class="list-decimal mt-2 ps-6">
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Identify Areas for Support:
</span>Uncover specific needs in financial security, recognition, work-life balance, professional development, mental health, job security, health and wellness, achievements and team building, effective communication, sense of purpose, and autonomy and empowerment.


          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Foster a Positive Work Environment:

</span>Addressing identified issues helps prevent decreased productivity, staff dissatisfaction, increased absenteeism, high turnover, retraining needs, and negative mindsets.          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Increased Absenteeism: </span> Overworked employees may take more leaves, affecting overall attendance.


          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Enhance Employee Performance:
</span> Support your team in performing at their best with targeted assistance in key areas.

          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Boost Employee Happiness:
</span>Tailor solutions that foster satisfaction and contentment, addressing unique needs.

          </p>
          </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Build Resilience Consistently:
</span> Equip your employees with tools to overcome challenges, promoting resilience in specific aspects of their professional lives.

          </p>
       </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Many Other Benefits:
</span> Uncover various aspects contributing to a thriving and empowered workforce.

          </p>
       </li>
      </ol>
      </div>
      <div class="mb-5">
          <p class="text-[14px] leading relaxed font-bold">How Does It Work?</p>
          <p class="text-[14px] leading relaxed">Click on the button below to access our Free and Confidential Assessment for YOUR Employees. Once booked, our team will assess each employee and provide a detailed report. If you're interested in further support, we'll discuss options with different strategies tailored to address the needs of your workforce, meeting your goals and budget. There's no obligation, and you can decide on the best course for your organization.</p>
            <a href="Book-now-form.php"><button class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">Book Now
           </button></a>     
      </div>    
    </div>
    
  </div>
     
     


    <?php include('footer.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>