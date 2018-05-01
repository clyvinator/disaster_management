<?php
	try{
		require 'PHPMailer-master/PHPMailerAutoload.php';
		include('connect.php');
		$data = $_POST['data'];
		$mail = new PHPMailer;
		$sql=mysql_query("select * from citizen where location='$data[2]'");
		                 
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();  
		$mail->SMTPDebug=0;                                    // Set mailer to use SMTP
		$mail->SMTPAuth=true;
		$mail->SMTPSecure = 'tls'; 
		// $mail->Port = 587;
		$mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers                       
		$mail->Username = 'clydeshelton8888@gmail.com';                 // SMTP username
		$mail->Password = 'clyde8888';                           // SMTP password                                              
		$mail->setFrom('clydeshelton8888@gmail.com', 'Disaster Management.');
		$mail->Subject = 'Disater Mgmt. - ALERT';
		$mail->Body    = '';
		$mail->AltBody = '';
		$message = '<h2>ALERT!<br/>'.$data[1].' alert in your location '.$data[2].'. Please take precautions.</h2><br/>Natural Disaster Management Dept.';
		$mail->MsgHTML($message);
		while($row=mysql_fetch_array($sql))
		{
			$citizenEmail=$row['email'];
			$mail->AddAddress($citizenEmail);
		    if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		    $mail->ClearAllRecipients();
		}
		$message = '<h2>ALERT!<br/>'.$data[1].' alert in location '.$data[2].' with Latitude '.$data[3].' and longitude '.$data[4].'. Requesting immedate support.</h2><br/>Natural Disaster Management Dept.';
		$mail->MsgHTML($message);
		$sql=mysql_query("select * from rescue where location='$data[2]'");
		while($row=mysql_fetch_array($sql))
		{
			$rescueEmail=$row['email'];
			$mail->AddAddress($rescueEmail);
		    if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		    $mail->ClearAllRecipients();
		}


	} catch (Exception $e) {
      die("Error");
 }		
?>