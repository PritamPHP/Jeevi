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
      <img src="./img/A journey to Stronger You.jpeg" class="w-full h-[90vh] sm:h-[70vh]  lg:h-[60vh] object-cover"
        alt="Course Image">
      <div class="absolute top-1/2 transform -translate-y-1/2  flex flex-col justify-start items-start text-white p-8">
        <h2 class="text-2xl md:text-5xl font-bold mb-4">Revitalizing Life: A Journey to an Empowered YOU</h2>
        <p class=" text-lg sm:text-xl font-semiold">Are you looking to enhance your physical and emotional well-being?
          Are you seeking to build a strong body, cultivate meaningful relationships, and foster an empowered mindset?

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
              class="w-full md:w-auto bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded sm:mb-2 md:mb-0 md:mr-2">Enroll
              Now : $500</button>
          </form>
        </div>
      </div>
    </div>
    <hr>
    <div class="mx-[5%] lg:mx-[15%] mt-[50px] text-gray-800">


      <p class="text-[16px] leading-relaxed mb-5 mt-[20px]">Embark on a transformative journey with our specialized 10
        weeks course designed to empower you in multiple dimensions of your life. At JEEVI Mental Health & Holistic
        Wellbeing Services, we understand the importance of holistic well-being, and our program is tailored to address
        key aspects of a fulfilling life</p>

      <hr class="my-5">

      <h4 class="text-lg font-bold mt-5">The Empowerment You Deserve: A Holistic Approach</h4>
      <ol class="list-decimal mt-5 ps-6">
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold">Sculpting a Strong Body:</span> Our fitness experts will guide you
            through personalized workouts and nutrition plans to help you build strength, stamina, and overall physical
            resilience. Whether you're a beginner or looking to take your fitness to the next level, our program is
            designed to meet you where you are.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Nurturing Meaningful Relationships:</span> Building and sustaining
            meaningful connections are vital for a fulfilling life. Our course includes specialized sessions with Usha
            Sagar, our Holistic Transformational Life Coach & Wellness Strategist. Usha believes in using a variety of
            strategies, such as inner child healing, reframing distorted thinking patterns, fostering self-awareness,
            assertive communication, emotional baggage clearance, forgiveness, self-acceptance, and gratitude. She
            addresses vulnerabilities, incorporates mindfulness practices (including detachment, self-love, RAIN,
            pranayama, progressive muscular relaxation), and emphasizes boundary-setting awareness. Usha's approach is
            tailored to the unique needs of each client, ensuring a comprehensive and effective result.

          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Fostering an Empowered Mindset:</span> Unleash your full potential
            with strategies to sharpen focus, enhance cognitive abilities, and boost productivity. Our holistic approach
            addresses both mental and practical aspects, providing you with the tools to cultivate an empowered mindset.
            Embrace positive thinking, self-affirmation, and resilience-building techniques to navigate life's
            challenges with confidence.

          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Customized Program:</span> Every individual is unique, and so is
            their journey to a stronger, more fulfilling life. Our program at JEEVI Mental Health & Holistic Wellbeing
            Services is fully customized to meet your specific needs. Whether you're focusing on physical strength,
            relationship building, or mindset empowerment, our experts, including Usha Sagar, are here to guide you.
          </p>
        </li>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Group and Individual Sessions:</span>Our course structure
            seamlessly integrates both group and individual sessions. Benefit from the collective energy and shared
            experiences in group sessions, and also receive personalized attention and guidance in individual sessions.
          </p>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> As-Needed Professional Support:</span> The help from professionals,
            including counselors, nutritionists, and other experts, is available as and when required. This ensures that
            you have access to support precisely when you need it during your transformative journey.
          </p>
        <li class="mb-3">
          <p class="text-[14px] leading-relaxed">
            <span class="text-[16px] font-semibold"> Confidentiality</span> Your privacy is of the utmost importance.
            All information shared during this transformative experience remains strictly confidential. Feel secure in
            exploring and addressing your personal goals and challenges within a safe and supportive space.
          </p>
        </li>
      </ol>

      <h3 class="text-md font-semibold mt-8">
        Your Journey Starts Here:
        <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enroll Today</button> -->

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
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enroll
            Today</button>
        </form>
      </h3>

      <p class="text-[15px] leading-relaxed my-5">Take the first step towards revitalizing your life by clicking the
        link to enroll in our empowering course at JEEVI Mental Health & Holistic Wellbeing Services. Our commitment is
        to guide you toward building a stronger body, nurturing meaningful relationships, and fostering both a
        meaningful and empowered mindset.</p>
      <p class="text-[15px] leading-relaxed mb-5">Your goals are acknowledged, and your journey towards a stronger, more
        fulfilling life is our collective focus. Let's embark on this empowering journey together. Click now to enroll
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