<?php 
session_start();
 if(isset($_POST['submit']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	 require_once('connect.php');
	 $query=mysql_query("select username,password from admin where username='$username' and password='$password'") or die(mysql_error());
	 
	 if(mysql_num_rows($query)==1)
	 {
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header('location:Adminotp.php?usr='.$username.'&&pss='.$password);
	 }
	 else
	 {
		
		header('location:error.php');
	 }
 }
?>