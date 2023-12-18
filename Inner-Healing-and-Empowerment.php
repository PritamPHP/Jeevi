<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<head>
  <title>Best Employee Wellness Programs | JEEVI</title>
  <meta name="description"
    content="Looking for counselling and wellness programs in Sydney? Our community mental health services and best employee wellness programs cater to your needs. Contact us now!">
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
  <link rel="stylesheet" type="text/css" href="css/custom2.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <meta name="google-site-verification" content="tSowFgDOk1U6b6HRTDzCa_DwqYF4dR8vOtgdok2mSHU" />







</head>

<body>
  <script type="text/javascript" src="js/sweetalert2.min.js"></script>





  <div class="min-h-screen flex flex-col items-center justify-center">
    <div class="w-full relative flex justify-end">
      <img src="./img/inner heading.png" class="w-full h-[90vh] sm:h-[70vh]  lg:h-[60vh] object-cover"
        alt="Course Image">
      <div class="absolute top-1/2 transform -translate-y-1/2  flex flex-col justify-start items-start text-white p-8">
        <h2 class="text-2xl md:text-5xl font-bold mb-4">Inner Healing and Empowerment $500 (10% of the Revenue would be
          donated to the Charity)</h2>
        <p class=" text-lg sm:text-xl font-semiold">Have you faced childhood trauma, or any other form of adversity? Are
          you navigating through struggles with self-esteem, encountering challenges in your relationships, battling
          anxiety issues, or feeling overwhelmed by life's demands?
        </p>
        <div class="mt-4 w-full flex flex-col md:flex-row justify-center items-center md:justify-start">
          <!-- <button onclick="window.location='./payment/index.php'" class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mb-2 md:mb-0 md:mr-2">Enroll Now : $500</button> -->

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

          <!-- <button class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Gift
            this course to a friend</button> -->
        </div>
      </div>
    </div>
    <hr>
    <div class="mx-[5%] lg:mx-[15%] mt-[50px] text-gray-800">
      <h3 class="text-2xl font-bold leading-tight mb-5">Have you faced childhood trauma, or any other form of adversity?
        Are you navigating through struggles with self-esteem, encountering challenges in your relationships, battling
        anxiety issues, or feeling overwhelmed by life's demands?</h3>
      <p class="text-[16px] leading-relaxed mb-5">It takes immense courage to acknowledge and confront these challenges.
        At JEEVI Mental Health & Holistic Wellbeing Services, we recognize that these difficulties can be isolating, and
        the journey towards healing may seem daunting. That's why our 10-week course is crafted with your unique needs
        in mind, offering a comprehensive approach to foster self-sufficiency and personal growth.</p>

      <hr class="my-5">

      <h4 class="text-2xl font-bold mt-5">The Support You Deserve: Tailored Resources for Your Journey</h4>
      <ol class="list-decimal mt-5 ps-6">
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Compassionate Coaching:</span> Our experienced Holistic
            Transformational Life Coach & Wellness Strategist, Usha Sagar, leads the way in providing empathetic
            guidance. Usha specializes in understanding the intricacies of adversity, low self-esteem, relationship
            challenges, and anxiety, offering personalized support to help you navigate through these complexities.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Professional Expertise:</span> In addition to Usha's expertise, our
            team comprises skilled counselors, nutritionists, and other professionals, all ready to contribute to your
            healing journey. We understand that each person's journey is unique, and our diverse team is equipped to
            address your specific challenges.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Holistic Approach:</span> Our 10-week course blends group and
            individual sessions, ensuring a tailored approach to your healing. We believe in addressing the root causes,
            incorporating both emotional and practical strategies to empower you towards self-sufficiency.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Customized Program:</span> Recognizing that everyone's journey is
            unique, our program at JEEVI Mental Health & Holistic Wellbeing Services is fully customized to meet your
            specific needs. From addressing specific adversities to working on individualized self-esteem goals, your
            program will be crafted to maximize your progress and healing.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Confidentiality:</span> Your privacy is paramount. Rest assured,
            all information shared during this transformative experience remains strictly confidential. We aim to create
            a safe space where you can openly explore and address your challenges without fear or judgment.
          </p>
        </li>
      </ol>

      <h3 class="text-xl font-semibold mt-8">
        Your Journey Starts Here:


        <!-- <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enroll Today</button> -->

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
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enroll Now
            : $500</button>
        </form>
      </h3>

      <p class="text-[15px] leading-relaxed my-5">Take the first step towards healing and self-sufficiency by clicking
        the link to enroll in our 10-week course at JEEVI Mental Health & Holistic Wellbeing Services. We understand
        that the path to healing is unique for each individual, and we are here to provide the support you need during
        this transformative journey.</p>
      <p class="text-[15px] leading-relaxed mb-5">Your challenges are acknowledged, and your journey towards healing and
        self-sufficiency is our collective focus. Let's embark on this empowering journey together. Click now to enroll
        and embrace the transformative potential that awaits you.</p>


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