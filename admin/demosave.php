<?php


if(isset($_POST['upload'])){	
    //Db Filei
	include("include/db.php");
     error_reporting(0);
     $heading=$_POST['heading'];
     $description=$_POST['description'];
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sourcePath = $_FILES['image']['tmp_name'];
      $targetPath = "img/".$_FILES['image']['name'];
      $filename = $_FILES['image']['name'];
      move_uploaded_file($sourcePath,$targetPath);
    }
      {
// echo "INSERT INTO `about` (`id`,`image`,`heading`,`description`)values(NULL,'".$targetPath."','".$heading."','".$description."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `demo` (`id`,`image`,`heading`,`description`)values(NULL,'".$targetPath."','".$heading."','".$description."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="demo.php"; </script>';
      }

}

?>
