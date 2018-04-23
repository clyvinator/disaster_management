<?php
include('connect.php');
session_start();
if(isset($_SESSION['name'])){
	
$sn=$_SESSION['name'];
$sql=mysql_query("select * from messages where `name`='$sn'");
while($rs=mysql_fetch_array($sql))
{
	$name= $rs['name'];
	$messages= $rs['messages'];
	echo"<li class='cm'><b>".ucwords($name)."</b>-" .$messages."</li>";
	
}
}	

?>