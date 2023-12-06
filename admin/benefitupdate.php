<?php
include("include/db.php");
 error_reporting(0);

$id= $_REQUEST["update_id"];
$heading=$_POST['heading'];
$subheading=$_POST['subheading'];
$description=$_POST['description'];
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        $sourcePath = $_FILES['image']['tmp_name'];
        $targetPath = "img/".$_FILES['image']['name'];
        move_uploaded_file($sourcePath,$targetPath);        
    }
    {
// echo "UPDATE `choose` SET `heading`='".$heading."',`description`='".$description."', `choose`='".$targetPath."' where id='".$id."'";exit;
		$result = $db_handle->runQuery("UPDATE `benefit` SET `heading`='".$heading."',`subheading`='".$subheading."',`description`='".$description."` `image`='".$targetPath."' where id='".$id."'");
		echo '<script>alert(" Updated Successfully ");
		window.location.href="benefit.php"; </script>';
	}

	?>