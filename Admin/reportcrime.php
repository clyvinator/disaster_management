<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fast Align</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="chat.js"></script>
<script src="script.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	 
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">
  
  <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
  <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
  

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

  <?php include('header.php');?>
  <!-- =============================================== sidebar-->
<?php include('sidebar.php'); ?>
  <!-- =============================================== sidebar end-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#fff!important;">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div>
           <!-- Main content -->
        <section class="content" style="background:transparent; margin-bottom:-4%;margin-left:-2.5%;margin-right:-2.5%;margin-top:-2.5%; min-height:575px;">
		<div style="box-shadow:0 1px 1px rgba(255, 255, 255, 0)">
		<div class="box-body">
		
        <div class="box-header" style="padding-left:15px;padding-right:15px">
		<form class="form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Location" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form></div>
		<form class="form-horizontal" name="frmnews" method="post" action="reportcrime.php" enctype="multipart/form-data">
		<div class="col-md-12"><div class="nav-tabs-custom" style="margin-bottom:0px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15555.994517123227!2d74.9033389!3d12.907809349999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1516253824617" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div></div></div></div>
		<input type="text" class="form-control" id="txtlocation" name="txtlocation" value="Udupi">
		<div style="box-shadow:0 1px 1px rgba(255, 255, 255, 0)">
		<div class="box-body">
            <div class="panel">
  <div class="panel-body">
   <div class="form-group">
            	<label for="fname" class="col-sm-2" style="margin-bottom:10px">Crime Type : </label>
            	<div class = "col-sm-10" style="margin-bottom:10px">
            		<select class="form-control">
						<option>Select Crime Type</option>
					</select>
            	</div>
    </div>
             <div class="form-group">
            	<label for="lname" class="col-sm-2" style="margin-bottom:10px">Accused : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" style="margin-bottom:10px">
            	</div>
            </div>
             <div class="form-group">
            	<label for="age" class="col-sm-2" style="margin-bottom:10px">Victim : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" style="margin-bottom:10px">
            	</div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Gender : </label>
            	<div class="col-sm-10" style="margin-bottom:10px">
             		<div class="radio-inline">
            			<label class="col-sm-2">
                		<input type="radio" name="gender" id="maleid" value="male">Male
                		</label>
           		 	</div>
             		<div class="radio-inline">
            			<label class="col-sm-2">
                		<input type="radio" name="gender" id="femaleid" value="female">Female
                		</label>
           		 	</div>
            	</div>
            </div>
			  <div class="form-group">
            	<label for="mobile" class="col-sm-2" style="margin-bottom:10px">Description : </label>
            	<div class = "col-sm-10">
            		<textarea class="form-control" style="margin-bottom:10px;height:80px;resize:none"></textarea>
            	</div>
            </div>
   <div class="form-group">
            	<label for="fname" class="col-sm-2" style="margin-bottom:10px">Case Status : </label>
            	<div class = "col-sm-10" style="margin-bottom:10px">
            		<select class="form-control">
						<option selected disabled>Select Case Status</option>
						<option>Solved</option>
						<option>Unsolved</option>
					</select>
            	</div>
    </div>
	
    <label for="fname" class="col-sm-12" style="margin-bottom:10px">Upload Images : </label>
	<div class="col-md-4" id="portfolio">
									<div class="container-fluid" style="width:300px;height:230px;margin-top:0px;margin:0px;max-width:100%;margin-bottom:15px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="folio-image">
											<img id="fp" style="border:2px solid #E3E2DF"  name="txtimage" width="100%" height="230" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload" style="margin-top:10px"></i></span>
						<input type="file" name="txtimage" id="txtimage"/>
						<script>
						document.getElementById("txtimage").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("fp").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	<div class="col-md-4" id="portfolio">
									<div class="container-fluid" style="width:300px;height:230px;margin-top:0px;margin:0px;max-width:100%;margin-bottom:15px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="folio-image">
											<img id="fp" style="border:2px solid #E3E2DF"  name="txtimage" width="100%" height="230" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload" style="margin-top:10px"></i></span>
						<input type="file" name="txtimage" id="txtimage"/>
						<script>
						document.getElementById("txtimage").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("fp").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	<div class="col-md-4" id="portfolio">
									<div class="container-fluid" style="width:300px;height:230px;margin-top:0px;margin:0px;max-width:100%;margin-bottom:15px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="folio-image">
											<img id="fp" style="border:2px solid #E3E2DF"  name="txtimage" width="100%" height="230" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload" style="margin-top:10px"></i></span>
						<input type="file" name="txtimage" id="txtimage"/>
						<script>
						document.getElementById("txtimage").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("fp").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
   <div class="form-group">
            	<label for="fname" class="col-sm-2" style="margin-bottom:10px">Upload Video : </label>
            	<div class = "col-sm-10" style="margin-bottom:10px">
            		<input type="file" class="form-control">
            	</div>
    </div>
			<div class="row-md-1">
			 <button type="reset" class="btn btn-primary pull-left" style="border:0px;width:100px;margin-top:20px">Reset</button>
             <button type="submit" name="submit" class="btn btn-primary pull-right" style="border:0px;width:100px;margin-top:20px">Submit</button>
			</div>
  </div>
</div>
</div><!--body-->
	  </div></form>
    </section>

	<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<script>
$(document).ready(function(){
	$('#srch-term').keyup(function(){
		var txt= $(this).val();
		if(txt != '')
		{
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search:txt},
				dataType:"text",
				success:function(data)
				{
					$('#result').html(data);
				}
				
			});
		}
		else{
			$('#result').html('');
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search:txt},
				dataType:"text",
				success:function(data)
				{
					$('#result').html(data);
				}
				
			});
		}
	});
});
</script>
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

<!--Chat Box-->
<!--Chat Box-->

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript" src="../new/js/lightbox.min.js"></script>
<script type="text/javascript" src="../new/js/main.js"></script>

	<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

  <script>
	$(document).on("click", ".paymt", function () {
    var todoId = $(this).data('id');
    var todoName = $(this).data('todo');
    $(".modal-body #payamt").val( todoId );
    $(".modal-body #receipt").val( todoName );
	$.SESSION['cid']=todoId;
});
</script>
<script>

</script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>


</body>
</html>