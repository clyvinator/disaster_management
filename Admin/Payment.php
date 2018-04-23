<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fast Align</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
   <link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="css/imgareaselect-animated.css" />
	<!-- scripts -->
	
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.min.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<style>
	
	img#uploadPreview{
		border: 0;
		border-radius: 3px;
		-webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		margin-bottom: 30px;
		overflow: hidden;
	}
	input[type="submit"]{
		border-radius: 10px;
		background-color: #61B3DE;
		border: 0;
		color: white;
		font-weight: bold;
		font-style: italic;
		padding: 6px 15px 5px;
		cursor: pointer;
	}
	</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php include('header.php'); ?>
  <!-- =============================================== sidebar-->
<?php include('sidebar.php'); ?>
  <!-- =============================================== sidebar end-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Main content -->
        <section class="content" style="background:transparent; margin-bottom:-2.7%;margin-left:-1%;margin-right:-1%;margin-top:-1%;">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Payment Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form" class="form-horizontal">
		<div>
		<div class="box-body">
            <div class="panel">
  <div class="panel-body">
  <div class="form-group">
            	<label for="receipt" class="col-sm-2">Payment Receipt No : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="receipt" disabled>
            	</div>
            </div>
   <div class="form-group">
            	<label for="fname" class="col-sm-2">First Name : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="fname" disabled>
            	</div>
    </div>
             <div class="form-group">
            	<label for="sname" class="col-sm-2">Surname : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="sname" disabled>
            	</div>
            </div>
            <div class="form-group">
            	<label for="email" class="col-sm-2">Email-id : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="email" disabled>
            	</div>
            </div>
			  <div class="form-group">
            	<label for="mobile" class="col-sm-2">Mobile Number : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="mobile" disabled>
            	</div>
            </div>
			<div class="form-group">
            	<label for="status" class="col-sm-2">Payment Status : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="status" disabled>
            	</div>
            </div>
			  <div class="panel">
                    <div class="panel-body">
					     <div class="col-md-12"  style="font-size:20px;">
						<label> Acknowledgement </label>
						<hr style="width:100%;">
                    </div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
									<label  class="control-label"></label>
									<img src="../Records/ExtraoralFrontalProfile.jpg" style="border:2px solid #E3E2DF" class="img-rounded" alt="Cinque Terre" width="100%" height="250">
								</br><!--<center><div class="box-body">
								   <button type="button" class="btn btn-primary" name="upload" style="width:100%;"><i class="fa fa-upload"></i> Upload</button>
								</div></center>-->
							</div>
						</div>
					</div>
				    </div>
				</div>
  
  </div>
</div>
</div><!--body-->
</div><!--box-->
			
</form> 
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('DoctorFooter.php'); ?>

</div>
<!-- ./wrapper -->
 
<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
 <script type="text/javascript" src="../new/js/lightbox.min.js"></script>
    <script type="text/javascript" src="../new/js/main.js"></script>
	
</body>
</html>
