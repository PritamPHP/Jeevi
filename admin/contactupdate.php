<?php
include("include/db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$location=$_POST['location'];
$email=$_POST['email'];
$mobilenumber=$_POST["mobilenumber"];
    {
// echo "UPDATE `choose` SET `heading`='".$heading."',`description`='".$description."', `choose`='".$targetPath."' where id='".$id."'";exit;
		$result = $db_handle->runQuery("UPDATE `contact` SET `location`='".$location."',`email`='".$email."', `mobilenumber`='".$mobilenumber."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="contact.php"; </script>';
	}

	?>