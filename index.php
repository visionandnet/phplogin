<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

Congratulation!
