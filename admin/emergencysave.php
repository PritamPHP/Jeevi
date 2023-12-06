<?php


if(isset($_POST['upload'])){	
    //Db Filei
	include("include/db.php");
     error_reporting(0);
     $description=addslashes($_POST['description']);
     $description1=addslashes($_POST['description1']);
    
      {
// echo "INSERT INTO `emergency` (`id`,`description`,`description1`)values(NULL,'".$description."','".$description1."')";exit;
        $result = $db_handle->runQuery("INSERT INTO `emergency` (`id`,`description`,`description1`)values(NULL,'".$description."','".$description1."')");
        echo '<script>alert(" Inserted Successfully ");
        window.location.href="emergency.php"; </script>';
      }

}

?>
