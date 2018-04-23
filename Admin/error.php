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
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
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
        <div class="modal-header" style="border:0px">
          <a type="button" class="close" href="Adminlogin.php">&times;</a>
          <h4 class="modal-title" style="text-align:center">Error</h4>
        </div>
        <div class="modal-body" style="text-align:center">
          <p style="margin-bottom:0px"><b>Wrong Username or Password</b>
		  </p>
        </div>
        <div class="modal-footer" style="text-align:center;margin-top:0px;border:0px">
		  <a href="Adminlogin.php" style="cursor:pointer">Go Back</a>
        </div>
      </div>
    </div>
  </div></form>

    </div>
	<!--Modal start-->
  </body>
</html>