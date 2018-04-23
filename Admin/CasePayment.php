<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
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
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
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
  <div class="content-wrapper" style="background-color:#f9fafc!important;">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div>
            <section class="content" style="background:transparent; margin-bottom:-4%;margin-left:-2.5%;margin-right:-2.5%;margin-top:-2.5%; min-height:575px;">
		<div class="box">
		<div class="box-body">
		<form action="" method="post">
   <div class="modal-body">
	<div>
	<input type="hidden" value="" id="payamt" name="payamt">
	<?php
	include('connect.php');
	$id=$_GET['id'];
	$qry=mysql_query("select `amount` from `payment` where `cse_id`='$id'");
	while($r=mysql_fetch_assoc($qry))
		$amt=$r['amount'];
	?>
		<div class="form-group">
            <center>	<label for="receipt"><h4>Total Payable Amount </h4> </label></center>
		
			
            	<div>
            		<input type="text" class="form-control" id="receipt" name="receipt" value="<?php echo $amt;?>" readonly>
            	</div>
				
            </div>
			<div class="form-group">
            <label for="receipt">Select Payment Method</label>
            	<div>
            		<select class="form-control">
                       <option selected disabled>---SELECT PAYMENT METHOD---</option>
                       <option value="">Account Payment</option>
                      <!-- <option value="">Cheque</option>
                       <option value="">Hand Cash</option>-->
                    </select>
            	</div>
            </div>
	<!--Account Payment-->
	<div>
	<?php
	include('connect.php');
	$sql=mysql_query("SELECT * FROM `admin` where `username`='Admin'");
	while($r=mysql_fetch_assoc($sql))
	{
		$accno=$r['acc_no'];
	    $bankname=$r['bank_name'];
		$i=$r['ifsc'];
	}
		
	?>
	 <div class="form-group">
            	<label for="bname">Bank Name </label>
            	<div>
            		<input type="text" class="form-control" id="bname" name="bname" value="<?php echo $bankname;?>" readonly>
            	</div>
    </div>
   <div class="form-group">
            	<label for="fname">Account Number </label>
            	<div>
            		<input type="text" class="form-control" id="acc_no" name="acc_no" value="<?php echo $accno;?>" readonly>
            	</div>
    </div>
	<div class="form-group">
            	<label for="bname">IFSC Code </label>
            	<div>
            		<input type="text" class="form-control" id="ifsc" name="ifsc" value="<?php echo $i;?>" readonly>
            	</div>
    </div>
             <div class="form-group">
            	<label for="currentdate">Date</label>
            	<div>
            		<input type="text" class="form-control" id="date" name="currentdate" id="currentdate" value="<?php echo date('d-m-Y g:i:s'); //Returns IST ?>" size="20" readonly>
            	</div>
            </div>
			<?php  
			include('connect.php');
			 $c_id=$_GET['id'];
			// echo "<script>alert('$c_id');</script>";
			$sql1=mysql_query("SELECT * from `payment` where `cse_id`='$c_id' ");
			while($br1=mysql_fetch_array($sql1))
			{
				if($br1['initial_amt']==0)
				{
					echo'
					<div class="form-group">
            	<label for="i_pay">Initial Payment  </label>
				<div class="row">
            	<div class="col-sm-6">
            		<input type="text" name="i_pay" class="form-control" id="i_pay" style="width:100%;"> 
					</div>
					<div class="col-sm-6">
					<input type="submit" class="btn btn-primary" id="initial" name="initial" value="Paid">
            	</div>
				</div>
            </div>';
				}
				else{
					echo '
					<div class="form-group">
            	     <label for="i_pay">Initial Payment  </label>
            	    <div>
            		    <input type="text" name="i_pay" class="form-control" id="i_pay" value="'.$br1['initial_amt'].'" style="width:100%;" readonly> 
					</div></br>
					
                </div>';
				}
			}
			?>
          	<?php
			include('connect.php');
			$s=$_GET['id'];
			$s=mysql_query("select * from `payment` where `cse_id`='$s' AND `paystatus`='Approved'");
			while($r1=mysql_fetch_array($s))
			{
				echo'
				<div>
            	<input type="button" class="btn btn-primary pull-left" id="balance" value="View Balance" onclick="ShowDiv()">
            	</div></br>	</br>	 
			  <div class="form-group">
			  
				<div id="bal" style="display:none;">
				<div class="form-group">
            		<input type="text" class="form-control" id="balance" name="balance" value="'.$r1['final_amt'].'" style="width:100%;" readonly> 
					</div>
            	<label for="final">Final Payment  </label>
				
            	<div class="row">
				
            	
					<div class="col-sm-6">
            		<input type="text" class="form-control" id="final" name="final" value="" style="width:100%;"> 
					</div>
					<div class="col-sm-6">
					<input type="submit" class="btn btn-primary" id="finalbtn" name="finalbtn" value="Paid">
            	</div>
				</div>
				</div>
				<script>
				function ShowDiv() {
    document.getElementById("bal").style.display = "";
}
				</script>
            </div>
				';
			}
			
			?>
				
			</div>
		
	</div></br></br>
  </div>
</form>
<?php
include('connect.php');
if(isset($_POST['initial'])){
	$i_amt=$_POST['i_pay'];
	$i_date=$_POST['currentdate'];
	$c_id=$_GET['id'];
	//echo "<script>alert('$i_date');</script>";
	$sql=mysql_query("UPDATE `payment` SET `initial_amt`='$i_amt',`i_date`=now(),`paystatus`='Initial' WHERE `cse_id`='$c_id'");
	if($sql==true)
	{
		unset($_SESSION['caseid']);
		
		echo"<script>alert('Successful');
		window.location='Docprofile.php';
		</script>";
		
	}
	else
	{
		echo"<script>alert('Not Successful');</script>";
	}
}
?>
<?php
include('connect.php');
if(isset($_POST['finalbtn'])){
	$i_amt=$_POST['final'];
	//$i_date=$_POST['currentdate'];
	$c_id=$_GET['id'];
	//echo "<script>alert('$i_date');</script>";
		$sql1=mysql_query("select * from `payment` where `cse_id`='$c_id' ");
				while($r=mysql_fetch_array($sql1))
				{
					$tamt=$r['final_amt'];
					$ini=$r['initial_amt'];
					$sub=$ini+$i_amt;
					$total=$tamt-$i_amt;
			    }
	$sql=mysql_query("UPDATE `payment` SET `initial_amt`='$sub',`final_amt`='$total', `paystatus`='Initial' WHERE `cse_id`='$c_id'");
	if($sql==true)
	{
	
		
		unset($_SESSION['caseid']);
		
		echo"<script>alert('Successful');
		window.location='Docprofile.php';
		</script>";
		
	}
	else
	{
		echo"<script>alert('Not Successful');</script>";
	}
}
?>
		</div>
		</div>
		</section>
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
<form method="post" id="chatform" onSubmit="return false;">
<div class="msg_box" style="right:10px;">
<div class="msg_head"><?=$_SESSION['name']; ?>
<div class="close">x</div>
</div>
<div class="msg_wrap">
	<div class="msg_body">
	<div class="pull-left"><input type="hidden" name="name" id="name" value="<?=$_SESSION['name']; ?>"></div>
	<div class="chatMessages">
	<!--<div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left" style="margin-left:12px;">Admin</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
     </div>
				  <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image" style="margin:10px;"><!-- /.direct-chat-img -->
	</div>	
	</div>
	
	<div class="msg_footer">
	  <div class="input-group">
                  <button type="submit" class="btn btn-box-tool"><i class="fa fa-paperclip"> Add File</i></button>
                      <span class="input-group-btn" style="margin-right:3%;">
                        <button type="submit" class="btn btn-warning btn-flat" >Send</button>
                      </span>
                </div>
				<div>
				<input type="text" class="msg_input" name="text" id="text" value="" placeholder="type chat message">
				</div><br/>
	</div>

</div>
</div>
</form>
<!--Chat Box-->
 <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="chat.js"></script>
<script src="script.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript" src="../new/js/lightbox.min.js"></script>
<script type="text/javascript" src="../new/js/main.js"></script>

	<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
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
<?php
}
?>