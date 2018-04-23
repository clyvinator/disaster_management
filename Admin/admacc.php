<?php 	include("database.php");
		
		$sql = "select * from admin";
		$rs = mysql_query($sql);
		while($row = mysql_fetch_array($rs)){
			$images = $row['image'];
		}
		$username = $_POST['txtusername'];
		$password = $_POST['txtpassword'];
		
		if($username != ""){
				$sql = "update admin set username='".ESQ($username)."',password='".ESQ($password)."'";
				mysql_query($sql);
			}
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
  <link rel="stylesheet" type="text/css" href="css/imgareaselect-animated.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  <div class="content-wrapper" style="background-color:#f9fafc!important;">
     <!-- Main content -->
        <section class="content" style="background:transparent;margin-left:-1%;margin-right:-1%;min-height:575px;">

      <!-- Default box --><div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Account Settings</h3>
        </div>
        <div class="box-body">
		<?php	$sql = "select * from admin";
				$rs = mysql_query($sql);
				while($row = mysql_fetch_array($rs)){
		?>
		<form method="post" class="form-horizontal">
            <div class="panel">
			<div class="panel-body">
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Email ID : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" name="txtusername" id="txtusername" value="<?php print $row['username']; ?>" style="margin-bottom:10px">
            	</div>
            </div>
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Password : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" name="txtpassword" id="txtpassword" value="<?php print $row['password']; ?>" style="margin-bottom:10px">
            	</div>
            </div>
             <div class="form-group">
            	<label class="col-sm-2">Confirm Password : </label>
            	<div class = "col-sm-10">
            		<input type="password" class="form-control" id="txtconfirmpassword" name="txtconfirmpassword">
					<span id="message"></span>
            	</div>
            </div>
			<script>
			$('#txtpassword, #txtconfirmpassword').on('keyup', function () {
			  if ($('#txtpassword').val() == $('#txtconfirmpassword').val()) {
				$('#message').html('Correct Password').css('color', 'green');
			  } else 
				$('#message').html('Please Retype Password').css('color', 'red');
			});
			</script>
		<button class="btn btn-md btn-primary btn-block signup-btn" type="submit" name="submit" onclick="submit_new();" style="margin-top:10px; width:150px; float:right; color:#fff; background:#255894">
                 Change Settings</button>
  </div>
</div>
        </form><?php } ?>
		
	<script type="text/javascript">
		function submit_new(){
			var username = document.getElementById('txtusername').value;
			var password = document.getElementById('txtpassword').value;
			var confirmpassword = document.getElementById('txtconfirmpassword').value;
			if(password != confirmpassword)
			{
				alert("Incorrect Password");
				}
			else if(username != "" && password != ""){
				document.forms['frmnews'].submit();
			}
			else
			{
				alert("All options are Madatory");
				}
		}
		
		$('#date .txtclass').datepicker({
			'format': 'd-m-yyyy',
			'autoclose': true
		});

	</script>
		</div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div></div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
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
	$(document).on("click",".nameup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #nameh").val(nameh);
		$("#nameModal").modal('show');
	});
	$(document).on("click",".qualup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #qualh").val(nameh);
		$("#qualModal").modal('show');
	});
	$(document).on("click",".addup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #addh").val(nameh);
		$("#addModal").modal('show');
	});
	$(document).on("click",".stateup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #stateh").val(nameh);
		$("#stateModal").modal('show');
	});
	$(document).on("click",".mobup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #mobh").val(nameh);
		$("#mobModal").modal('show');
	});
	$(document).on("click",".mailup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #mailh").val(nameh);
		$("#mailModal").modal('show');
	});
	$(document).on("click",".passup",function(){
		var nameh=$(this).data('id');
		$(".modal-body #passh").val(nameh);
		$("#passModal").modal('show');
	});
	</script>
	
</body>
</html>