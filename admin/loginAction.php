<?php
include("include/db.php");
SESSION_START();
error_reporting(0);
//echo $_POST['email'];
if($_POST['username'] !='') {
$user = $_POST['username'];
$pass = $_POST['password'];
$sq = "SELECT * FROM `admin` where username='".$user."' and password='".$pass."'";
	$count = $db_handle->numRows($sq);
	//echo $count;
	if($count==1) {
	$resultsa=$db_handle->runQuery($sq);
	foreach($resultsa as $data) {
		$_SESSION['jeevi']	=$data[''];
	}
	
echo '<script>
alert( "Login Successfully!");location.replace("home.php");</script>';
	}	
	else {  
	echo '<script>alert( "Details are incorrect!");
	location.replace("index.php");</script>';}
	
	
}
				?>