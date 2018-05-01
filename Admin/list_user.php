<?php 	include("database.php");
if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
          header('location:Adminlogin.php');
        }
		$srchtitle = $_POST['srchtitle'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disaster Mgmt</title>
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

<?php include('header.php'); ?>

  <!-- =============================================== sidebar-->
<?php include('sidebar.php'); ?>
  <!-- =============================================== sidebar end-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#f9fafc!important;">
    <!-- Main content -->
    <section class="content" style="margin-left:-1%;margin-right:-1%; margin-top:-1%;min-height:575px;">
      <!-- Default box -->
	  
     <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" style="font-weight:600">View Rescue Team Details</h3>
        </div>
        <div class="box-body"><!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom responsive">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
				 <div class="box-body">
			<form class="form" name="frmsearch" method="post" action="list_user.php" style="width:100%;">
        <div class="input-group responsive">
            <input type="text" class="form-control" name="srchtitle" id="srchtitle" <?php if($srchtitle != ""){ ?> value="<?php print $srchtitle; ?>" <?php }else{ ?> value="Search by Title" <?php } ?> onclick="if(this.value == 'Search by Title'){this.value='';}" onblur="if(this.value==''){this.value='Search by Title';}">
            <div class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="search_title();"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form><br>
		<form class="form-horizontal" name="frmnews" method="post" action="list_user.php" enctype="multipart/form-data">
		<div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
			<div class="table-responsive mailbox-messages">
			
			 <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Select</th>
                    <th>Location</th>
                    <th>Title</th>
                    <th>Email ID</th>
                    <th>Phone</th>
                  </tr>
				</thead><tbody>
				  <?php 	$sql = "select * from rescue where title like '%".ESQ($srchtitle)."%' order by rid";
						$rs = mysql_query($sql);
						while($row = mysql_fetch_array($rs)){ ?>
				  <tr>
                    <td><input type="checkbox" name="case_id[]" class="delete_doc" value="<?php print $row['rid']; ?>"></td>
                    <td class="mailbox-star"><?php print $row['location']; ?></td>
					<td class="mailbox-subject"><?php print $row['title']; ?></td>
					<td class="mailbox-name"><?php print $row['email']; ?></td>
					<td class="mailbox-name"><?php print $row['phone']; ?></td>
					<td class="mailbox-date">
					
                   </tr>
				   <?php } ?></tbody>
                </table>
</div></div></div></form>
        </div>
		   
		   </div>			
                <!-- Recent Cases Post End-->
				
				
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
		  
	<script type="text/javascript">
		$('#date .txtclass').datepicker({
			'format': 'd-m-yyyy',
			'autoclose': true
		});

		function delete_temple(rid) {
			if(confirm("You are going to delete this Entry. Are you Sure?")){
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var content = this.responseText;
						window.location="list_rescue.php";
					}
				};
				xhttp.open("GET", "delete_rescue.php?rid="+rid, true);
				xhttp.send();
			}
		}
		
		function search_title(){
			document.forms['frmsearch'].submit();
		}
		
		function search_category(){
			document.forms['frmsearch'].submit();
		}
	</script>
	
	<script>
	$(document).ready(function(){
		$('#delete').click(function(){
		if(confirm("Are you sure you want to Delete?"))
		{     
			var case_id=[];
			
			$(':checkbox:checked').each(function(i){
				case_id[i]=$(this).val();
			});
				if(case_id.length===0)
				{
					alert("Please select atleast one checkbox");
					
				}
				else
				{
					$.ajax({
						url:'delete_ambcases.php',
						method:'POST',
						data:{case_id:case_id},
						success:function()
						{
							for(var i=0;i<case_id.length;i++)
							{
								$('tr#'+case_id[i]+'').css('background-color', '#ccc');
								$('tr#'+case_id[i]+'').fadeOut('slow');
							}
						window.location="ambview.php";
						}
						
					});
				}
		}
		else
		{
			return false;
		}
	});
	});
	</script>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
</div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div id="fb-root"></div>
  <?php include('footer.php'); ?>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Chat Box-->

<form method="post" id="chatform" onSubmit="return false;">
<div class="msg_box" style="right:290px; display:none;">
<div class="msg_head"><?=$_SESSION['sess_user']; ?>
<div class="close">x</div>
</div>
<div class="msg_wrap">
	<div class="msg_body">
	<div class="pull-left"><input type="hidden" name="name" id="name" value="<?=$_SESSION['sess_user']; ?>"></div>
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
				</div>
	</div>
</div>
</div>
</form>

<!--Chat Box -->

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
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
 <script src="chat.js"></script>
<script src="script.js"></script>
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
?>