<?php
include('connect.php');
if(isset($_POST['text'])&& isset($_POST['name']))
{
	$text=$_POST['text'];
	$name=$_POST['name'];
	
	if(!empty($text) && !empty($name))
	{
		$sql=mysql_query("insert into messages(`name`,`messages`) VALUES('$name','$text')");
		
		echo"<li class='cm'><b>".ucwords($name)."</b>-" .$text."</li>";
	}
	
}

?>