<?php
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:Adminlogin.php");
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
  <link href="../css/navigation.css" type="text/css" rel="stylesheet"/>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
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
        <section class="content" style="margin-left:-1%;margin-right:-1%; margin-top:-1%;margin-bottom:-2.5%; min-height:575px;">

      <!-- Default box -->
   
<script type="text/javascript">
    function ShowHideDiv(){
      var change = document.getElementById("changeid");
    var approve = document.getElementById("approveid");
    if(change.checked){
      div1.style.display="block";
      approve.checked=false;
    }
    }
     function ShowHideDiv1(){
      var change = document.getElementById("changeid");
    var approve = document.getElementById("approveid");
    if(approve.checked){
      div1.style.display="none";
      change.checked=false;
    }
    }
</script>
 <div class="box">

          <div class="box-header with-border">
          <h5 class="box-title">Case ID: &nbsp; </h5>
        </div>
		<div class="nav-tabs-custom responsive">
		<ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Video</a></li>
              <li><a href="#timeline" data-toggle="tab">Photos</a></li>
              <li><a href="#settings" data-toggle="tab">PDF</a></li>
              <li><a href="#layer" data-toggle="tab">Layer</a></li>
            </ul>
        <div class="box-body">
          <form role="form" method="post">
               <div class="row-sm-12">
			 
        <div class="tab-content">
        <div class="active tab-pane" id="activity" style="text-align:center">
			<div class="pull-right">Uploaded On:&nbsp; </div>
				  
				  
	<div class="col-sm-12" role="application">
		<iframe id="frame" src="video_tabbed.php" style="width:100%; height:435px; border:0px">
		</iframe>
	</div>
				  
				  <br/>
		</div>
		<div class="tab-pane" id="timeline">
        
		<center><div class="col-xs-12">
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-0" data-filter="true" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="0" data-toggle="modal">
                            <img alt="" src="assets/images/pexels-photo-2000x1333-33-2000x1333-39.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan A</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan B</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan C</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan D</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Logo</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan E</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan F</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan G</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:30%; padding:0">
                        <div href="#lb-gallery1-0a" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Total Scan H</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-0a">
        <div class="modal-dialog" style="margin-top:4em">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="0"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="1"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="2"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="3"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="4"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="5"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="6"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="7"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0a" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="jQuery Image Slider with Thumbnail" src="assets/images/pexels-photo-2000x1333-33.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-0a">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-0a">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
		</div></center>
		
		</div>
		<div class="tab-pane" id="settings">
        <center>
                  <div class="col-sm-12" style="text-align:left">
					<embed src="Pdf/patil2014.pdf" width="100%" height="450px" />
					<b>Upload PDF : </b><input type="file" style="float:right">
                  </div>
        </center><br/>
		</div>
		<div class="tab-pane" id="layer">
        <center>
                  <div class="col-sm-12">
				  
				  
				  
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-0" data-filter="true" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:48%; padding:0">
                        <div href="#lb-gallery1-0" data-slide-to="0" data-toggle="modal">
                            <img alt="" src="assets/images/pexels-photo-2000x1333-33-2000x1333-39.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">X ray A</span>
                        </div>
                    </div>
					
					<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Images, Bokeh" data-video-url="false" style="width:48%; padding:0">
                        <div href="#lb-gallery1-0" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8-2000x2800-45.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">X ray B</span>
                        </div>
                    </div>
					
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-0">
        <div class="modal-dialog" style="margin-top:4em">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-0" data-slide-to="0"></li>
						<li data-app-prevent-settings="" data-target="#lb-gallery1-0" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="jQuery Image Slider with Thumbnail" src="assets/images/pexels-photo-2000x1333-33.jpg">
                        </div>
						<div class="carousel-item">
                            <img alt="HTML Lightbox Free Download" src="assets/images/photo-1471914395157-f9d1b9dc592d6-2000x2800-8.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-0">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-0">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
				  
				  
				  
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Layer</h4>
						  </div>
						  <div class="modal-body">
							<p>
							<img src="../images/bg-11.jpg" style="width:100%">
							</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
                  </div>
        </center><br/>
		</div>
		</div>
		<br>
		<div class="form-group row-sm-12" style="width:100%;">
                    	<label for="ptnum" class="col-sm-12" style="padding-top:25px">View Description </label>
                        <div class="col-sm-12">
                        	<textarea class="form-control" rows="4" id="ptnum" disabled></textarea>
                    	</div>
                 </div>
				 </br>
     <div class="form-group" style="margin-left:3%; margin-top:1%;">
            
              <div class="col-sm-10"> 
           <center>
                    <div style="margin-top:1%;">
                    <input type="button" class="btn btn-primary" id="chnage" value="Write Description" onclick="ShowDiv()"> &nbsp;&nbsp; 
			  <input type="button" class="btn btn-primary extr" id="extra" value="Add Extra Payment Amount" data-toggle="modal" data-target="#modal3" data-id="'.$_GET['id'].'">
                  </div>
          </center>
        </div>
           </div>
                
                 </div>             
                </form>
        
        </div>
        <form method="post">
          <div id="div1" style="display:none;">
                    <div class="form-group">
                        <div>
                          <textarea class="form-control" rows="3" id="descp" name="descp" style="width:94%;margin-top:10px;margin-left:3%;margin-right:3%;"></textarea>
                      </div>   
                  </div>
             <div>
             <input class="btn btn-primary" type="submit" name="post" value="Post" style="height:40%; width:10%; margin-top:1%;margin-left: 87%;"/>
             </div><br/></form>
</div>   
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      <!-- /.box -->

    </section>
   
  
     <!-- /.content Model3 -->
  <div class="modal fade" id="modal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center>  <h4 class="modal-title">Payment</h4> </center>
        </div>
<form action="" method="post">
   <div class="modal-body">
  <div>
  <input type="hidden" value="" id="ext" name="ext">
    <div class="form-group">
              <label for="receipt">Extra Payable Amount  </label>
              <div>
                <input type="text" class="form-control" id="extra" name="extra" value="">
              </div>
            </div>
  <center>    
   <div class="form-group">
              <div>
                <input type="submit" name="submit" class="btn btn-primary" id="payextra" value="Submit">
              </div>
  </div></center></br></br>
  </div>
      </div>
 </form> 
<?php
include('connect.php');
if(isset($_POST['submit']))
{
	$id=$_POST['ext'];
	$e=$_POST['extra'];
$sql=mysql_query("UPDATE `payment` SET `extra`='$e' WHERE `cse_id`='$id'");
if($sql==true)
{
	echo "<script>alert('Successfully Added');</script>";
}
else{
	echo "<script>alert('Not Successfully Added');</script>";
}
}
?> 
    </div>
  </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <?php include('footer.php'); ?>

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
     <script>
          function ShowDiv() {
          document.getElementById("div1").style.display = "";
        }
        </script>
		  <script>
	$(document).on("click",".extr",function(){
		var pay=$(this).data('id');
		$(".modal-body #ext").val(pay);
		$("#modal3").modal('show');
	});
</script>
</body>
</html>
<?php
}
?>
