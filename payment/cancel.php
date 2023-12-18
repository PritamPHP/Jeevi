<?php
// session_start();
// include_once 'dbConnect.php';

// $pid = $_SESSION['pay_id'];

// $insert = $db->query("UPDATE payment SET status='2' where id='" . $pid . "'");
// unset($_SESSION['pay_id']);
?>
<!-- 
<h1 class="error">Your PayPal Transaction has been Canceled</h1>
<a href="index.php" class="btn-link">Back to Home</a> -->

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
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark fal">❌</i>
        </div>
        <h1 style="color:red;">Your PayPal Transaction has been Canceled</h1>
        <p>Your PayPal Transaction has been Canceled</p>
        <a href="../index.php">Back to Home</a>
    </div>
</body>

</html>