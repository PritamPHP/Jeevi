<?php
include("include/db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$description=$_POST['description'];
$description1=$_POST['description1'];
    {

		$result = $db_handle->runQuery("UPDATE `emergency` SET  `description`='".$description."',`description1`='".$description1."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="emergency.php"; </script>';
	}

	?>