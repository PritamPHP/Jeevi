<?php


if(isset($_POST['upload'])){	
    //Db Filei
	include("include/db.php");
     error_reporting(0);
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "img/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
      move_uploaded_file($sourcePath,$targetPath);
    }
      {
         // echo "INSERT INTO `about` (`id`,`heading`,`subheading`,`description`,`t_image`,`b_image`)values(NULL,'".$heading."','".$subheading."','".$description."','".$sourcePath."','".$sourcePath1."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `banner` (`id`,`banner`)values(NULL,'".$targetPath."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="banner.php"; </script>';
      }

}

?>
