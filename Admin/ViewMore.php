<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:index.php");
} else{
?>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">
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
  <div class="content-wrapper" style="background-color:#f9fafc!important;">
    <!-- Main content -->
    <section class="content" style="background:transparent; margin-bottom:-2.7%;margin-left:-1%;margin-right:-1%;margin-top:-1%;">

      <!-- Default box -->
      <div class="box">
								<div class="box-header with-border">
					<!--<h5 class="box-title"></h5>-->
<small><ol class="breadcrumb pull-right" style="background-color:white !important; height:5px!important;">
  <li><a href="Docprofile.php">Home</a></li>
  <li class="active">Complete Details</li>
</ol></small>
				</div>
        <div class="box-body">
			<section class="content">	
<form role="form" class="form-horizontal">
<?php
include('connect.php');
$id=$_GET['pid'];
//echo "<script>alert('$id');</script>";
$sql=mysql_query("SELECT * FROM `patient` INNER JOIN `case` INNER JOIN `images` ON patient.p_id = case.pat_id AND case.case_id = images.c_id WHERE `p_id`='$id'");
while($br = mysql_fetch_assoc($sql))
{
	$img= $br['anterior_frontal'];
	//echo $br['anterior_frontal'];
echo'
		<div class="box-header with-border">
          <h3 class="box-title">Patient Details:</h3><div class="pull-right"><strong>Patient ID: </strong>&nbsp;&nbsp; <b> '.$br['p_id'].'</b></div>
        </div>
            <div class="panel">
  <div class="panel-body">
   <div class="form-group">
            	<label for="fname" class="col-sm-2">Full Name : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="fname" value="'.$br['name'].'" disabled>
            	</div>
            </div>
			 <!-- <div class="form-group">
            	<label for="address" class="col-sm-2">Address : </label>
            	<div class = "col-sm-10">
            		<textarea rows="5" class="form-control" id="address"> </textarea>
            	</div>
            </div>-->
             <div class="form-group">
            	<label for="age" class="col-sm-2">Age : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="age" value="'.$br['age'].'" disabled>
            	</div>
            </div>
            <div class="form-group">

            	<label for="gender" class="col-sm-2">Gender : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="gender" value="'.$br['gender'].'" disabled>
            	</div>
            </div>
			<div class="form-group">
            	<label for="mobile" class="col-sm-2">Mobile Number : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="mobile" value="'.$br['mobile'].'" disabled>
            	</div>
            </div>
  </div>
</div>
<div class="box-header with-border">
          <h3 class="box-title">Case Details:</h3><div class="pull-right"><strong>Case ID:</strong>&nbsp;&nbsp; <b>'.$br['case_id'].'</b></div>
</div>
<div class="panel">
  <div class="panel-body">
     <div class="form-group">
            	<label for="allergy" class="col-sm-2">Allergic to : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="allergy" value="'.$br['allergic'].'" disabled>
            	</div>
            </div>
            <div class="form-group">
            	<label for="complaint" class="col-sm-2">Chief Complaint : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="complaint" value="'.$br['chief_comp'].'" disabled> 
            	</div>
            </div>
            <div class="form-group">
            	<label for="other" class="col-sm-2">Other Details (MidLine): </label>
            	<div class = "col-sm-10">
			<!--	<input type="text" class="form-control" id="complaint" value="'.$br['other_det'].'" disabled>-->
                 <textarea rows="5" class="form-control" id="other" disabled>'.$br['other_det'].' </textarea>
            	</div>
            </div>
            
             <div class="form-group">
            	<label class="col-sm-2"  style="margin-top:5px;">Treatment plan : </label> 
				
            	<div class= "col-sm-10">
				<input type="text" class="form-control" id="no" value="'.$br['treatment_plan'].'" disabled></br>
             		<input type="text" class="form-control" id="no" value="'.$br['extract_tooth_no'].'" disabled> 
            	</div>
			</div>
				</br>
            <div class="form-group">
				<div class="col-md-2"><label>Uploaded Images</label></div>
            </div>
				<div class="form-group" style="margin-left:2%;margin-right:2%;">
				<div class = "col-sm-15">
				<div class="panel">
                    <div class="panel-body">
					<div class="col-md-12" style="font-size:20px;">       
						<label>Intra-oral</label>
						<hr style="width:100%;">
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
									<label  class="control-label" style="text-align:center">Anterior frontal </label>
									<img src="uploads/Intra-oral/'.$br['anterior_frontal'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Buccal left-side </label>
									<img src="uploads/Intra-oral/'.$br['buccal_leftside'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Buccal right-side </label>
									<img src="uploads/Intra-oral/'.$br['buccal_rightside'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Lower occlusal </label>
									<img src="uploads/Intra-oral/'.$br['lower_occlusal'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Upper occlusal </label>
									<img src="uploads/Intra-oral/'.$br['upper_occlusal'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
						</div>
					</div>
					</div>
                </div>
					
                     <br/> 
                <div class="panel">
                    <div class="panel-body">
					     <div class="col-md-12"  style="font-size:20px;">
						<label> Extra-oral </label>
						<hr style="width:100%;">
                    </div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
									<label  class="control-label">Frontal Profile </label><br>
									<img src="uploads/Intra-oral/'.$br['frontal_profile'].'" style="border:2px solid #E3E2DF" width="280" height="330" >
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Frontal Profile-smiling </label><br>
									<img src="uploads/Intra-oral/'.$br['frontal_simling'].'" style="border:2px solid #E3E2DF" width="280" height="330" >
								</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Side Profile </label><br>
									<img src="uploads/Intra-oral/'.$br['side_profile'].'" style="border:2px solid #E3E2DF" width="280" height="330" >
										</br>
							</div>
						</div>
					</div>
				    </div>
				</div>
                    <br/>
					<div class="panel">
                        <div class="panel-body">
						     <div class="col-md-12"  style="font-size:20px;">
						<label> Radiography </label>
						<hr style="width:100%;">
                    </div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<label  class="control-label">Lateral Cephalometry </label><br>
								<img src="uploads/Intra-oral/'.$br['lateral_cephalometry'].'" style="border:2px solid #E3E2DF" width="280" height="330" >
									</br>
							</div>
							<div class="col-md-4">
									<label  class="control-label">Panoramin Radiography(OPG) </label>
									<img src="uploads/Intra-oral/'.$br['panoramin_radiography'].'" style="border:2px solid #E3E2DF" width="400" height="200">
								</br>
							</div>
						</div>
					</div>
					
					    </div>
					</div>   
            	</div>
            </div>
    </div>
</div>
<center>
<div>
 <a href="Doc_Video.php?c_id='.$br['case_id'].'" type="button" class="btn btn-primary" name="upload"><i class="fa fa-upload"></i> View Video/Comments</a>
</div></center>';
} ?>

</form>
        
</section>
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

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
   <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script
	  <!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
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
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>

</body>
</html>
<?php
}
?>
