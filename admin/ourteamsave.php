<?php


if(isset($_POST['upload'])){	
    //Db Filei
	include("include/db.php");
     error_reporting(0);
     $heading=$_POST['heading'];
     $subtitle=$_POST['subtitle'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "img/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
      move_uploaded_file($sourcePath,$targetPath);
    }
      {
        // echo "INSERT INTO `ourteam` (`id`,`image`,`heading`,`subtitle`)values(NULL,'".$targetPath."','".$heading."','".$subtitle."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `ourteam` (`id`,`image`,`heading`,`subtitle`)values(NULL,'".$targetPath."','".$heading."','".$subtitle."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="ourteam.php"; </script>';
      }

}

?>
