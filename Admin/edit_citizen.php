<?php 	include("database.php");
		
		$cid = $_GET['cid'];
		
		$sql = "select * from citizen where cid=".$cid;
		$rs = mysql_query($sql);
		while($row = mysql_fetch_array($rs)){
			$images = $row['image'];
		}
		$title = $_POST['txttitle'];
		$location = $_POST['txtlocation'];
		$email = $_POST['txtemail'];
		$phone = $_POST['txtphone'];
		
		if($email != "" && $phone != ""){
				$sql = "update citizen set email='".ESQ($email)."',location='".ESQ($location)."',phone='".ESQ($phone)."' where cid=".$cid;
				mysql_query($sql);
			}
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disater Mgmt</title>
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
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div>
           <!-- Main content -->
        <section class="content" style="margin-bottom:-4%;margin-left:-2.5%;margin-right:-2.5%;margin-top:-2.5%;">
		<div style="box-shadow:0 1px 1px rgba(255, 255, 255, 0)">
		<div class="box-body">
        <div class="box-header with-border" style="background-color:#fff;border-radius:4px 4px 0 0">
          <h3 class="box-title"><b>Edit Citizen</b></h3>
        </div>
		<?php	$sql = "select * from citizen where cid=".$cid;
				$rs = mysql_query($sql);
				while($row = mysql_fetch_array($rs)){
		?>
			<form class="form" name="frmnews" method="post" action="edit_citizen.php?cid=<?php print $cid; ?>" enctype="multipart/form-data">
            <div class="panel">
  <div class="panel-body">
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Location : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" value="<?php print $row['location']; ?>" style="margin-bottom:10px" disabled>
            		<input type="hidden" class="form-control" name="txtlocation" id="txtlocation" value="<?php print $row['location']; ?>">
            	</div>
            </div>
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Title : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" value="<?php print $row['name']; ?>" style="margin-bottom:10px" disabled>
            		<input type="hidden" class="form-control" name="txttitle" id="txttitle" value="<?php print $row['title']; ?>">
            	</div>
            </div>
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Email ID : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" name="txtemail" id="txtemail" value="<?php print $row['username']; ?>" style="margin-bottom:10px">
            	</div>
            </div>
             <div class="form-group">
            	<label class="col-sm-2" style="margin-bottom:10px">Phone : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" name="txtphone" id="txtphone" value="<?php print $row['password']; ?>" style="margin-bottom:10px">
            	</div>
            </div>
			<div class="row-md-1">
			 <button type="reset" class="btn btn-primary pull-left" style="border:0px;width:100px;margin-top:20px">Reset</button>
			 <input type="button" value="Submit" onclick="submit_new();" class="btn btn-primary pull-right" style="border:0px;width:100px;margin-top:20px">
			</div>
    </div>
  </div></form><?php } ?>
			<script type="text/javascript">
				function submit_new(){
					var email = document.getElementById('txtemail').value;
					var phone = document.getElementById('txtphone').value;
					if(email != "" && phone != ""){
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
</div><!--body-->
	  </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
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
	<script type="text/javascript">
		function delete_temple(cid) {
			if(confirm("You are going to delete this Entry. Are you Sure?")){
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var content = this.responseText;
						window.location="crimetype.php";
					}
				};
				xhttp.open("GET", "delete_crime.php?cid="+cid, true);
				xhttp.send();
			}
		}
	</script>
  <?php include('footer.php'); ?>
  
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