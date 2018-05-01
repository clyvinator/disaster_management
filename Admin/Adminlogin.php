<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Admin - Login</title>  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

  <body class="login-img2-body" style="background-color:#0495f8;background:#0495f8">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15558.293298610522!2d74.84485335!3d12.8708121!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1516957464910" width="100%" height="100%" style="position:fixed;top:0px" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <div class="container">
	<form method="POST" role="form" action="login.php">
      <div class="login-form" style="position:relative">        
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-cloud"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-lg" type="submit" name="submit" style="width:49%">Login</button>
            <button class="btn btn-primary btn-lg" type="reset" name="reset" style="width:49%">Reset</button>
            <label class="checkbox">
                <span style="margin-left:25%;"> <a href="" name="forgotbtn" data-toggle="modal" data-target="#forgotModal1" style="color:#000000!important"> Forgot Password?</a></span>
            </label>
        </div>
      </div>
	</form>

  <form role="form" action="" method="post">
  <div class="modal fade" id="forgotModal1" role="dialog" style="left:17px">
    <div class="modal-dialog modal-lg" style="margin-top:216px;width:370px">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center">Enter Email ID</h4>
        </div>
        <div class="modal-body" style="text-align:center">
          <p><input type="text" class="form-control" name="username" placeholder="Email ID" style="border-radius:0px"></p><br>
          <button type="submit" class="btn btn-primary btn-lg" name="emailid" style="border-radius:0px">Submit</button>
        </div>
        <div class="modal-footer" style="text-align:center">
		  <button type="submit" name="emailid" style="cursor:pointer;padding:0px;border:0px;background-color:transparent;color:blue">Didn't Recieve Password, Resend Now</button>
        </div>
      </div>
    </div>
  </div></form>
    </div>
	<!--Modal start-->
  </body>
</html>
<?php
		include('connect.php');
		if(isset($_POST['emailid']))
		{
			$username=$_POST['username'];
				$sql=mysql_query("SELECT * FROM `admin` WHERE `username`='$username' ");
				if($a=mysql_num_rows($sql))
				{
					while($row=mysql_fetch_array($sql))
					{
						$username=$row['username'];
			//Random string
			$str = "";
			$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
			$max = count($characters) - 1;
			for ($i = 0; $i < 6; $i++) {
				$rand = mt_rand(0, $max);
				$str .= $characters[$rand];
			}
			
			$message=
			'Hello, <b>ADMIN</b><br/><br/>
			As you have requested, we have reset your Password for '.$username.'.<br/><br/>
			To Log into your account :
			<ul><li>Copy this temporary Password : <b>'.$str.'<b><br></li>
			<li>Type or paste the temporary password to log in to your account.</li>
			<li>Change the temporary password <b>ASAP</b> to something you remember.</li>
			</ul><br/>
			<br/>
			Regards,<br/>
			<b>Disater Mgmt.</b>
			';
			require 'PHPMailer-master/PHPMailerAutoload.php';

			$mail = new PHPMailer;

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
			$mail->addAddress($username);     // Add a recipient
			$mail->Subject = 'Disater Mgmt. - Forgot Password';
			$mail->Body    = '';
			$mail->AltBody = '';
			$mail->MsgHTML($message);	
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo "<script>alert('Request sent Successfully. Please check your Email Account');
				window.location='Adminlogin.php';
				</script>";
				$query=mysql_query("UPDATE `admin` SET `password`='$str' WHERE `username`='$username'");
			}
					}
				}
				else
				{
					echo "<script>alert('Email ID not registered');
					window.location='Adminlogin.php';
					</script>";
				}
				
		} ?>