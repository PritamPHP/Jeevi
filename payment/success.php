<?php
session_start();
include_once 'pay-config.php';
// include_once 'dbConnect.php';

// $pid = $_SESSION['product_id']; 

// if(isset($_GET['PayerID'])){ 
//     echo "<h1>Your Payment has been successfull</h1>";
//     $insert = $db->query("UPDATE product SET status='completed' where id='".$pid."'");
// }
// else{
//     echo "<h1>Your Payment has been failed</h1>";
// }
// session_destroy();

// $pid = $_SESSION['pay_id'];

?>



<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    .suc {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .fal {
        color: red;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>

<body>
    <div class="card">
        <?php //if (isset($_GET['PayerID'])) {
            // $insert = $db->query("UPDATE payment SET status='1' where id='" . $pid . "'");
            ?>
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark suc">✓</i>
            </div>
            <h1>Success</h1>
            <p>Your Payment has been successfull</p>
        <?php //} else { 
            //  $insert = $db->query("UPDATE payment SET status='3' where id='" . $pid . "'");
             ?>
            <!-- <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark fal">❌</i>
            </div>
            <h1 style="color:red;">failed</h1>
            <p>Your Payment has been failed</p> -->

        <?php //}
        // unset($_SESSION['pay_id']);
        ?>

        <a href="../index.php">Back to Home</a>
    </div>
</body>

</html>