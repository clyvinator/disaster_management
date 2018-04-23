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
   <link href="../new/css/uploads.css" rel="stylesheet">
   <script src="../new/js/upload.js"></script>
   <body>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
	  <section id="portfolio" >
	  <div class="container-fluid">
         <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="folio-image">
                <img class="img-responsive" src="../dist/img/profile1.jpg" width="20px" height="20px">
              </div>
              <div class="overlay">
                <div class="overlay-content">
                  <div class="overlay-text">
                    <div class="folio-overview">

				<!--	<button type="button" class="btn btn-default btn-circle" name="upload" id="upload" onclick="div_show(this.name)"><i class="glyphicon glyphicon-camera"></i></button>-->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-camera"></i></button>
				  <!--    <span class="folio-link">
<a class="folio-read-more" href="https://app.aiclindia.com/" data-single_url="portfolio-single.html" target="_blank">
<i class="fa fa-camera"></i></a></span>-->
 <!--<span class="folio-expand"><a href="../dist/img/profile1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  </section>
     
      <div>
	  <center>
		<div class="responsive"> 
		<label><h5>Doctor ID</h5>
		<h4>Doctor Name</h4></label>
		</div>
		</center>
		 </div>
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="profile.php">
            <i class="fa fa-home"></i> <span>Patient</span> 
          </a>
        </li>
	<!--	<li>
          <a href="profile.php">
            <i class="fa fa-home"></i> <span>Queries</span> 
          </a>
        </li>-->
        <li>
          <a href="Newcase.php">
            <i class="fa fa-book"></i> <span>New Case</span>
          </a>
        </li>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Old Case</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="Approvedcase.php"><i class="fa fa-circle-o"></i> Approved Cases</a></li>
            <li><a href="Pendingcase.php"><i class="fa fa-circle-o"></i> Pending Cases</a></li>
          </ul>
        </li>-->
		<li>
          <a href="Support.php">
            <i class="fa fa-support"></i> <span>Support</span>
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Image</h4>
        </div>
		<center>
<form action="upload.php" method="post" enctype="multipart/form-data">
   <div class="modal-body">
	<div class="col-md-15">
		<div class="row">
		    <!--Camera-->
			<div class="col-md-4">
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" data-toggle="modal" data-target=".demo-popup">
					<span class="fileupload-new"><i class="glyphicon glyphicon-camera"></i></br>Camera</span>
						<input type="file" name="fileToUpload" id="fileToUpload"/>
					</span>
					<span class="fileupload-preview"></span>
						<!-- <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
				</div>
			</div>
			<!--Browse-->
			<div class="col-md-4">  
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" data-toggle="modal" data-target=".demo-popup">
					<span class="fileupload-new"><i class="glyphicon glyphicon-picture"></i></br>Browse</span>
						<input type="file" name="fileToUpload" id="fileToUpload"/>
					</span>
					<span class="fileupload-preview"></span>
						<!-- <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
				</div> 
			</div>
			<!--Delete-->
			<div class="col-md-4">  
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" data-toggle="modal" data-target=".demo-popup">
					<span class="fileupload-new"><i class="glyphicon glyphicon-trash"></i></br>Delete</span>
						<!--<input type="file" name="fileToUpload" id="fileToUpload"/>-->
					</span>
					<span class="fileupload-preview"></span>
						<!-- <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
				</div>
			</div>
		</div>
	</div></br></br>
	   <input type="submit" class="btn btn-default" value="Upload Image" name="submit">
  </div>
</form>
</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
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
	 <script type="text/javascript" src="../new/js/my_js.js"></script>
	
</body>
</html>
  
  
  