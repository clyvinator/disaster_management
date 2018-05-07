<?php 	include("database.php");
  // if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
  //         header('location:Adminlogin.php');
  //       }
		$location = $_POST['location'];
		$title = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
      echo "<script>alert('Enter valid email ');
      document.location='userregister.php';</script>";
    }
    else if((preg_match('/^[+][9][1][0-9]{10}+$/', $phone))==false) {
      echo "<script>alert('Enter valid phone number ');
      document.location='userregister.php';</script>";
    }
    else if($location != "" && $title != "" && $email != "" && $phone != "")
    {
      $sql = "insert into citizen(location, name, email, phone) values('".ESQ($location)."','".ESQ($title)."','".ESQ($email)."','".ESQ($phone)."')";
      mysql_query($sql);
      echo "<script>alert('Successfully Registered');
      document.location='userregister.php';</script>";
    }	
    else {
      echo "<script>alert('All fields are mandatory ');
      document.location='userregister.php';</script>";
    }

?>