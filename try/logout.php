<?
session_start();
session_unset();
session_destroy();
ob_start();
header("location:loginpage.php");
ob_end_flush(); 
include 'loginpage.php';
//include 'home.php';
exit();
?>