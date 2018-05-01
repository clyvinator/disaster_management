<?php  
session_start(); 
include('connect.php');
unset($_SESSION['name']);
unset($_SESSION['otp']);
session_destroy();
header("location: ../index.php");
?>  