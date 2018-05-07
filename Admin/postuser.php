<?php 	include("database.php");
  // if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
  //         header('location:Adminlogin.php');
  //       }
		$location = $_POST['location'];
		$title = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    if($location != "" && $title != "" && $email != "" && $phone != "")
    {
      $sql = "insert into citizen(location, name, email, phone) values('".ESQ($location)."','".ESQ($title)."','".ESQ($email)."','".ESQ($phone)."')";
      mysql_query($sql);
      echo "<script>alert('Successfully Registered')</script>";
    }	

?>