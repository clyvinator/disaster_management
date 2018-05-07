<?php 
 if(isset($_POST['submit']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(strlen($username) < 5) {
		echo "<script type='text/javascript'>alert('Email too short');</script>";
		header('location:adminregister.php');
		exit();
	}
	else if(strlen($password) < 5) {
		echo "<script type='text/javascript'>alert('Password too short');</script>";
		header('location:adminregister.php');
		exit();
	}
	else {
		$password_hash=crypt($password, substr($username, 0, 4));
		require_once('connect.php');
		$query=mysql_query("insert into admin(username, password) values('$username','$password_hash')") or die(mysql_error());
		echo "<script type='text/javascript'>alert('Success');</script>";	
	}
	
 }
?>