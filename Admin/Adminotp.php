<?php	
		$uname = $_GET['usr'];
		$upass = $_GET['pss'];
?>
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
	<form method="POST" role="form" action="loginotp.php">
      <div class="login-form" style="position:relative">        
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-plus"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" value="<?php print $_GET['usr']; ?>" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" value="<?php print $_GET['pss']; ?>" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-lg" type="submit" name="submit" style="width:49%">Login</button>
            <button class="btn btn-primary btn-lg" type="reset" name="reset" style="width:49%">Reset</button>
            <label class="checkbox">
                <span style="margin-left:25%;"> <a href="" name="forgotbtn" data-toggle="modal" data-target="#forgotModal1" style="color:#fff!important"> Forgot Password?</a></span>
            </label>
        </div>
      </div>
	  
  <div class="modal fade in" id="myModal" role="dialog" style="display:block;background:rgba(0, 0, 0, 0.35)">
    <div class="modal-dialog modal-lg" style="margin-top:216px;width:370px">
      <div class="modal-content" style="left:9px">
        <div class="modal-header">
          <a type="button" class="close" href="Adminlogin.php">&times;</a>
          <h4 class="modal-title" style="text-align:center">Enter OTP</h4>
        </div>
        <div class="modal-body" style="text-align:center">
          <p><input type="text" class="form-control" name="otp" placeholder="OTP" style="border-radius:0px">
		  </p><br>
          <button type="submit" name="submit" class="btn btn-primary btn-lg" style="border-radius:0px">Submit</button>
        </div>
        <div class="modal-footer" style="text-align:center">
		  <a style="cursor:pointer">Didn't Recieve Code, Resend Now</a>
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
		// {
		// 	$username=$uname;
		// 		$sql=mysql_query("SELECT * FROM `admin` WHERE `username`='$username' ");
		// 		if($a=mysql_num_rows($sql))
		// 		{
		// 			while($row=mysql_fetch_array($sql))
		// 			{
		// 				$username=$row['username'];
		// 	//Random string
		// 	$str = "";
		// 	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		// 	$max = count($characters) - 1;
		// 	for ($i = 0; $i < 6; $i++) {
		// 		$rand = mt_rand(0, $max);
		// 		$str .= $characters[$rand];
		// 	}
			
		// 	$message=
		// 	'Hello, <b>ADMIN</b><br/><br/>
		// 	As you have requested, we have reset your OTP for '.$username.'.<br/><br/>
		// 	To Log into your account :
		// 	<ul><li>Copy this OTP : <b>'.$str.'<b><br></li>
		// 	<li>Type or paste the OTP to log in to your account.</li>
		// 	</ul><br/>
		// 	<br/>
		// 	Regards,<br/>
		// 	<b>Disaster Mgmt.</b>
		// 	';
		// 	require 'PHPMailer-master/PHPMailerAutoload.php';

		// 	$mail = new PHPMailer();

		// 	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		// 	$mail->isSMTP();  
		// 	$mail->SMTPDebug=0;                                    // Set mailer to use SMTP
		// 	$mail->SMTPAuth=true;
		// 	$mail->SMTPSecure = 'ssl'; 
		// 	$mail->Port = 465;
		// 	$mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers                       
		// 	$mail->Username = 'priyashrinivas24@gmail.com';                 // SMTP username
		// 	$mail->Password = 'natural24@';                           // SMTP password                                              
		// 	$mail->setFrom('priyashrinivas24@gmail.com', 'Disaster Mgmt.');
		// 	$mail->addAddress($username);     // Add a recipient
		// 	$mail->Subject = 'Disaster Mgmt. - OTP';
		// 	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		// 	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		// 	$mail->MsgHTML($message);	
		// 	if(!$mail->send()) {
		// 		echo 'Message could not be sent.';
		// 		echo 'Mailer Error: ' . $mail->ErrorInfo;
		// 	} else {
		// 		echo "<script>alert('Request sent Successfully. Please ckeck your Email Account');
		// 		</script>";
		// 		$query=mysql_query("UPDATE `admin` SET `otp`='$str' WHERE `username`='$username'");
		// 	}
		// 			}
		// 		}
		// 		else
		// 		{
		// 			echo "<script>alert('Request Unsuccessfull.');
		// 			window.location='index.php';
		// 			</script>";
		// 		}
				
		// } ?>