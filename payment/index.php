<?php
// Include configuration file 
include_once 'pay-config.php';

// Include database connection file 
// include_once 'dbConnect.php';
?>

<form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

    <!-- Important For PayPal Checkout -->
    <!-- <label>Name</label>
    <input type="text" name="name" id="name" required><br><br>

    <label>Email</label>
    <input type="text" name="email" id="email" required><br><br> -->

    <input type="hidden" value="500" name="amount" id="amount">

    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">
    <!-- Specify URLs -->
    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
    <br><br>
    <!-- Display the payment button. -->
    <input type="submit" name="submit" border="0" value="Paid">
</form>

<!-- <script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#paypal_form").submit(function () {
            setData(jQuery("#name").val(), jQuery("#email").val(), jQuery("#amount").val());
        });
        function setData(name, email, amount) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

            };
            xhttp.open("GET", "payment-insert.php?name=" + name + "&email=" + email + "&amount=" + amount , true);
            xhttp.send();
        }
    });
</script> -->



