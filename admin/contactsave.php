<?php


if(isset($_POST['upload'])){	
    //Db Filei
	include("include/db.php");
     error_reporting(0);
     $location=$_POST['location'];
     $email=$_POST['email'];
     $mobilenumber=$_POST['mobilenumber'];
      {
    //  echo   "INSERT INTO `contact` (`id`,`location`,`email`,`mobilenumber`)values(NULL,'".$location."','".$email."','".$mobilenumber."')";exit;
// echo "INSERT INTO `about` (`id`,`image`,`heading`,`description`)values(NULL,'".$targetPath."','".$heading."','".$description."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `contact` (`id`,`location`,`email`,`mobilenumber`)values(NULL,'".$location."','".$email."','".$mobilenumber."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="contact.php"; </script>';
      }

}

?>
