<?php 
session_start();
 if(isset($_POST['submit']))
 {
	$username=$_POST['username'];
	$otp=$_POST['otp'];
	 require_once('connect.php');
	 $query=mysql_query("select username,otp from admin where username='$username' and otp='$otp'") or die(mysql_error());
	 
	 if(mysql_num_rows($query)==1)
	 {
		$_SESSION['username']=$username;
		$_SESSION['otp']=$otp;
		header('location:Adminhomepage.php');
	 }
	 else
	 {
		
		header('location:error1.php');
	 }
 }
?>