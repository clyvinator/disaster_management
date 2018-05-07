<?php 
session_start();
require './Twilio/autoload.php';
use Twilio\Rest\Client;
 if(isset($_POST['submit']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	require_once('connect.php');
	$password_hash = crypt($password, substr($username, 0, 4));
	$query=mysql_query("select username,password from admin where username='$username' and password='$password_hash'") or die(mysql_error());

	 if(mysql_num_rows($query)==1)
	 {
	 	$str = "";
			$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
			$max = count($characters) - 1;
			for ($i = 0; $i < 6; $i++) {
				$rand = mt_rand(0, $max);
				$str .= $characters[$rand];
			}

	 	$sid = "ACf46b8a7787dad46843e217a79ac013e7";
		$token = "bbbb191c16a18b7e972fa03c2a3d479a";
		$client = new Client($sid, $token);

		$client->messages
		    ->create(
		        "+919008930868",
		        array(
		            "from" => "+19389999959",
		            "body" => "OTP for Disaster Management login is ".$str
		        )
		    );
		mysql_query("update admin set otp='$str' where username='$username'");
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