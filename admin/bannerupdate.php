<?php
include("include/db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        $sourcePath = $_FILES['image']['tmp_name'];
        $targetPath = "img/".$_FILES['image']['name'];
        move_uploaded_file($sourcePath,$targetPath);        
    }
    {

		$result = $db_handle->runQuery("UPDATE `banner` SET  `banner`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="banner.php"; </script>';
	}

	?>