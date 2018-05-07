<?php 
 
       $phone   = urldecode($_POST['phone']);
       $email  = urldecode($_POST['email']);
       $lat  = urldecode($_POST['lat']);
       $lng  = urldecode($_POST['lng']);
       $city  = urldecode($_POST['location']);
       require_once('connect.php');
       $sql = "Select * from citizen where phone ='+$phone' and email='$email'";
       $res=mysql_query($sql);
       $num=mysql_affected_rows();
       if($num<1) {
       	echo "Invalid Email or Phone";
       }
       else {
       	$sql = "UPDATE citizen set location ='$city' where phone ='+$phone' and email='$email'";
       	$res=mysql_query($sql);
       echo "SUCCESS";
       }

 ?>