<?php
		require './Twilio/autoload.php';
		include('connect.php');
		use Twilio\Rest\Client;
	try{

		$sid = "ACf46b8a7787dad46843e217a79ac013e7";
		$token = "bbbb191c16a18b7e972fa03c2a3d479a";
		$client = new Client($sid, $token);

		$data = $_POST['data'];
		$sql=mysql_query("select * from citizen where location='$data[2]'");
		$message = 'ALERT! '.$data[1].' alert in your location '.$data[2].'. Please take precautions. Natural Disaster Management Dept.';
		while($row=mysql_fetch_array($sql))
		{
			$citizenPhone=$row['phone'];
		    $client->messages
		    ->create(
		        $citizenPhone,
		        array(
		            "from" => "+19389999959",
		            "body" => $message
		        )
		    );
		}

	    $message = 'ALERT! '.$data[1].' alert in location '.$data[2].' with Latitude '.$data[3].' and longitude '.$data[4].'. Requesting immedate support. Natural Disaster Management Dept.';
	    
	    $sql=mysql_query("select * from rescue where location='$data[2]' and `$data[1]`=1");
		while($row=mysql_fetch_array($sql))
		{
			$citizenPhone=$row['phone'];
		    $client->messages
		    ->create(
		        $citizenPhone,
		        array(
		            "from" => "+19389999959",
		            "body" => $message
		        )
		    );
		}

	}
	catch(Exception $e) {
		die($e);
	}
?>