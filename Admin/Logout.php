<?php  
session_start(); 
include('connect.php');
$s=$_SESSION['name'];
$s=mysql_query("Update `registration` set `chat_status`='0' where `name`='$s'");
unset($_SESSION['name']);
session_destroy();
header("location: ../index.php");
?>  