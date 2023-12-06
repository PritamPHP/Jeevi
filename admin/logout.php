<?php
session_start();
unset($_SESSION['jeevi']);
session_unset();
session_destroy();
header("Location: index.php");
?>