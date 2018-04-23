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
	 
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">
  
  <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
  <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
  
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
		<div class="col-md-12"><div class="nav-tabs-custom" style="margin-bottom:0px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15555.994517123227!2d74.9033389!3d12.907809349999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1516253824617" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div></div></div></div>
		<div style="box-shadow:0 1px 1px rgba(255, 255, 255, 0)">
		<div class="box-body">
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content" style="padding:0px">
              <div class="active tab-pane" id="activity">
<!-- Recent -->
                 <div>
        <div class="box-header with-border">
          <h3 class="box-title" style="font-weight:800">View</h3>
        </div>
        <div class="box-body">
   <form class="form-horizontal">
                  <div>
				  <form class="form" role="search">
		 <div class="box box-primary" style="margin-bottom:0px">
            <!-- /.box-header -->
            <div class="box-body no-padding">
			  <form method="post">
              <div class="table-responsive mailbox-messages">
			  <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Wind Density</th>
                    <th>Ricter Measure</th>
                    <th>Alert Stations</th>
                  </tr>
				</thead>
                  <tbody>
                  <tr>
                    <td class="mailbox-star">25deg</td>
                    <td class="mailbox-name">35deg</td>
                    <td class="mailbox-subject">158kmph</td>
                    <td class="mailbox-subject">700</td>
                    <td class="mailbox-date"><a name="view" type="button" class="btn btn-default btn-sm"><i class="fa fa-check-square-o"></i></a></td>
                  </tr> </tbody>
                </table>
</div>
              <!-- /.mail-box-messages -->
            </form>
			</div>
            <!-- /.box-body -->
          </div>
		  </div>
 </form>
 <!--Pagination-->
<div style="float:right">
    </div>
</div>
<!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
                <!-- /recent -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      <!-- Default box -->
	  </div>
	  </div>
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