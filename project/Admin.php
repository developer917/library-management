<?php
session_start();
$aname = $_POST['nam'];
$apass = $_POST['pass'];

if ($aname == "admin" && $apass == "admin") {
	header("location:HomePage.php");
}
else{
	echo "invalid name and password";
	header("location:adminlogin.php");

}


?>