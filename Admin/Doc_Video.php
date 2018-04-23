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
        <section class="content" style="margin-left:-1%;margin-right:-1%; margin-top:-1%;margin-bottom:-2.5%;min-height:575px;">

      <!-- Default box -->
        <div class="box">
		<?php
		$id=$_GET['c_id'];
		$sql=mysql_query("SELECT * FROM `case` WHERE `case_id` ='$id'");
		while($br=mysql_fetch_array($sql))
		{
		echo'
			<div class="box-header with-border">
          <h3 class="box-title">Case ID: &nbsp;&nbsp;'.$br['case_id'].' </h3> 
        </div>
        	<div class="box-body">
        		<form role="form" method="post">
						<div class="row-sm-12">
						<center>
						<div class="col-sm-12">';?>
						<?php include('video_tabbed.php')?>
						 <?php echo '</div>
						 </center>
						 </div>
				 <div class="form-group row-sm-12" style="width:100%;">
                    	<label for="ptnum" class="col-sm-11">View Description </label>
                        <div class="col-sm-12">
                        	<textarea class="form-control" rows="2" id="ptnum" disabled>'.$br['description'].'</textarea>
                    	</div>
                 </div>
				 <div class="form-group row-sm-12" style="width:100%;">
                    	<label for="ptnum" class="col-sm-11">Doctor Description </label>
                        <div class="col-sm-12">
                        	<textarea class="form-control" rows="2" id="desp" disabled>'.$br['doc_descrp'].'</textarea>
                    	</div>
                 </div>
				 </form>
';	
		}
		?>
            <br/>
			<form method="post" id="form2">
            	<div class="form-group col" style="margin-left:1.2%;">
					
					<input type="button" class="btn btn-primary" id="chnage" value="Write Comment" onclick="ShowDiv()" style="margin-top:1%;"> &nbsp;&nbsp; 
					<a href="CasePayment.php?id=<?php echo "$_GET[c_id]";?>" class="btn btn-primary" id="approve" name="approve" value=""  style="margin-top:1%;">Accept & Proceed to Payment</a>
						
				</div>
			 </form>
	 
					
             		<div id="div1" style="display:none;">
					<form method="post">
                  <div class="row-sm-12">
                    <div class="form-group">
                    	<label for="desc" class="col-sm-11">Write Description </label>
                        <div class="col-sm-12">
                        	<textarea class="form-control" rows="4" id="desc" name="desc" style="width:100%"></textarea>
							<input class="btn btn-primary" type="submit" name="post" id="" value="Post" style="height:40%; width:10%; margin-top:15px; float:right"/>
                    	</div>
					 </div>
                 </div>
				 </form>
				 </div>
					 <script>
				function ShowDiv() {
    document.getElementById("div1").style.display = "";
}
				</script>
			
			</div>
			</div>
<?php
include('connect.php');
if(isset($_POST['post']))
{
	$id=$_GET['c_id'];
	echo"<script>alert('$id');</script>";
	$doc_dec=$_POST['desc'];
	$sql=mysql_query("UPDATE `case` SET `doc_descrp`='$doc_dec', `doc_up_date`=now() WHERE `case_id`='$id'");
	if($sql==true)
	{
	echo "<script>alert('Post Submitted');</script>";
	header("Location: Doc_Video.php?c_id=$id");
	}
	else{
	echo "<script>alert('Not Successfull');</script>";
	}	
}

?>

        
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      <!-- /.box -->

    </section>
    <!-- /.content -->
	
	<div class="modal fade" id="paymodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center>  <h4 class="modal-title">Payment Status</h4></center>
        </div>
<form action="" method="post">
   <div class="modal-body">
	<div>
	<input type="hidden" value="" id="payamt" name="payamt">
		<div class="form-group">
            <center>	<label for="receipt"><h4>Total Payable Amount </h4> </label></center>
		
			
            	<div>
            		<input type="text" class="form-control" id="receipt" name="receipt" value="" readonly>
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
			if(isset($_SESSION['caseid']))
			{
			 $c_id=$_SESSION['caseid'];
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
			}
			?>
          	<?php
			include('connect.php');
			if(isset($_SESSION['caseid']))
			{
			$s=$_SESSION['caseid'];
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
	$c_id=$_POST['payamt'];
	//echo "<script>alert('$i_date');</script>";
	$sql=mysql_query("UPDATE `payment` SET `initial_amt`='$i_amt',`i_date`=now() WHERE `cse_id`='$c_id'");
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
	$c_id=$_POST['payamt'];
	//echo "<script>alert('$i_date');</script>";
		$sql1=mysql_query("select * from `payment` where `cse_id`='$c_id' ");
				while($r=mysql_fetch_array($sql1))
				{
					$tamt=$r['final_amt'];
					$ini=$r['initial_amt'];
					$sub=$ini+$i_amt;
					$total=$tamt-$i_amt;
			    }
	$sql=mysql_query("UPDATE `payment` SET `initial_amt`='$sub',`final_amt`='$total' WHERE `cse_id`='$c_id'");
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
	
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
<?php
}
?>