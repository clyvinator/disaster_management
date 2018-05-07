<?php   include("database.php"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>User - Register</title>  
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
    <div class="container">
	<form method="POST" role="form" action="postuser.php">
      <div class="login-form" style="position:relative">        
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-cloud"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" minlength="5" maxlength="20" class="form-control" name="name" placeholder="Name" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_mail"></i></span>
                <input type="text" minlength="5" maxlength="20" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class=" icon_phone"></i></span>
              <input type="text" minlength="5" maxlength="20" class="form-control" name="phone" placeholder="Phone" autofocus>
            </div>
            <select class="form-control" name="location" id="txtlocation" style="margin-bottom:10px">
            <option selected disabled>Select a City</option>
            <?php $sql = "select * from location";
                $rs = mysql_query($sql);
                while($row = mysql_fetch_array($rs)){ ?>
              <option value="<?php print $row['location']; ?>"><?php print $row['location']; ?></option>
            <?php } ?>
          </select>
            <button class="btn btn-primary btn-lg" type="submit" name="submit" style="width:49%">Register</button>
            <button class="btn btn-primary btn-lg" type="reset" name="reset" style="width:49%">Reset</button>
        </div>
      </div>
	</form>
    </div>
	<!--Modal start-->
  </body>
</html>
