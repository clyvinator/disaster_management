<!-- Main content -->
        <section class="content" style="background:transparent; margin-bottom:-4%;margin-left:-2.5%;margin-right:-2.5%;margin-top:-2.5%; min-height:575px;">
		<div class="box">
		<div class="box-body">
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Recent</a></li>
              <li><a href="#timeline" data-toggle="tab">Approved</a></li>
              <li><a href="#settings" data-toggle="tab">Pending</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Recent -->
                 <div>
        <div class="box-header with-border">
          <h3 class="box-title">Patient Details</h3>
        </div>
        <div class="box-body">
   <form class="form-horizontal">
                  <div>
				  <form class="form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search using Patient's ID" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form><br>
		 <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
			                  <!-- Check all button -->
                <button type="button" class="btn btn-default btn-md checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                  <button type="button" class="btn btn-default btn-md" data-widget="delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-md" data-widget="edit" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></button>
               <!-- /.btn-group -->
			   

                <!-- /.pull-right -->
              </div>
			  <form method="post">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Select</th>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Case ID</th>
                    <th>Contact Details</th>
					<th>Case Status</th>
                    <th>View More</th>
                  </tr>
				</thead>
                  <tbody>
				  <?php 
				  include('connect.php');
				  $doc_id=$_SESSION['id'];
				  $page=(isset($_GET['page'])&&$_GET['page']>0)?(int)$_GET['page']:1;
				  $perPage=10;
				  $limit= ($page>1)?($page * $perPage)-$perPage:0;
				  $final= $page*$perPage;
				  $sql=mysql_query("SELECT SQL_CALC_FOUND_ROWS `p_id` , `name` , `mobile` , `d_id`, `case_id` , `status` FROM `patient` INNER JOIN `case` ON patient.p_id = case.pat_id AND `d_id`='$doc_id' AND `status`='Approved' LIMIT {$limit},{$perPage}");
				 while($br = mysql_fetch_array($sql))
  {
	  echo'
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star">'.$br['p_id'].'</td>
                    <td class="mailbox-name">'.$br['name'].'</td>
                    <td class="mailbox-subject">'.$br['case_id'].'</td>
					<td class="mailbox-subject">'.$br['mobile'].'</td>
					<td class="mailbox-name">'.$br['status'].'</td>
                    <td class="mailbox-date"><a name="view" type="button" href="ViewCreated.php?pid='.$br['p_id'].'" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i></a></td>
                  </tr>';
  }
 // $records= mysqli_fetch_all($sql);
  $total=mysql_query("Select FOUND_ROWS() as total");
  $total=mysql_fetch_assoc($total)['total'];
  $pages= ceil($total/$perPage);
  
				  ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </form>
		
			
			</div>
            <!-- /.box-body -->
          </div>
		
				  </div>
                </form>
				<div style="margin-left:88%;">
                 <strong> <big><?php echo $limit+1; ?>-<?php echo $final; ?>/<?php echo $total; ?></big></strong>
                  <div class="btn-group">
                    <a href="?page=<?php $pagep=$page-1; echo $pagep;?>" type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                    <a href="?page=<?php $pagen=$page+1; echo $pagen;?>" type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                  </div>
				  
				  
				  
				  
                  <!-- /.btn-group -->
                </div>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
                <!-- /recent -->
              </div>
              <!-- /.tab-pane -->
			  
              <div class="tab-pane" id="timeline">
                <!-- Approved -->
                <div>
        <div class="box-header with-border">
          <h3 class="box-title">Patient Details</h3>
        </div>
        <div class="box-body">
   <form class="form-horizontal">
                  <div>
				  <form class="form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search using Patient's ID" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form><br>
		 <div class="box box-primary">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
			       <!-- Check all button -->
                <button type="button" class="btn btn-default btn-md checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                  <button type="button" class="btn btn-default btn-md" data-widget="delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-md" data-widget="edit" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></button>
               <!-- /.btn-group -->
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Select</th>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Case ID</th>
                    <th>Contact Details</th>
					<th>Case Status</th>
                    <th>View More</th>
					<th>Payment</th>
                  </tr>
				</thead>
                  <tbody>
                   <?php 
				  include('connect.php');
				  $doc_id=$_SESSION['id'];
				  $sql=mysql_query("SELECT `p_id` , `name` , `mobile` , `d_id`, `case_id` , `status` FROM `patient` INNER JOIN `case` ON patient.p_id = case.pat_id AND `d_id`='$doc_id' AND `status`='Approved'");
				 while($br = mysql_fetch_array($sql))
  {
	  echo'
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star">'.$br['p_id'].'</td>
                    <td class="mailbox-name">'.$br['name'].'</td>
                    <td class="mailbox-subject">'.$br['case_id'].'</td>
					<td class="mailbox-subject">'.$br['mobile'].'</td>
					<td class="mailbox-name">'.$br['status'].'</td>
                    <td class="mailbox-date"><a name="view" type="button" href="ViewMore.php?pid='.$br['p_id'].'" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i></a></td>
					<td class="mailbox-date"><a name="view" type="button" href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal1"><i class="fa fa-plus-square"></i></a></td>
                  </tr>';
  }
				  ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
		
				  </div>
                </form>
				
				
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <!--Pending-->
				 <div>
        <div class="box-header with-border">
          <h3 class="box-title">Patient Details</h3>
        </div>
        <div class="box-body">
   <form class="form-horizontal">
                  <div>
				  <form class="form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search using Patient's ID" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form><br>
		 <div class="box box-primary">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
			       <!-- Check all button -->
                <button type="button" class="btn btn-default btn-md checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                  <button type="button" class="btn btn-default btn-md" data-widget="delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-md" data-widget="edit" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></button>
               <!-- /.btn-group -->
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Select</th>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Case ID</th>
                    <th>Contact Details</th>
					<th>Case Status</th>
                    <th>View More</th>
                  </tr>
				</thead>
                  <tbody>
                   <?php 
				  include('connect.php');
				  $doc_id=$_SESSION['id'];
				  $sql=mysql_query("SELECT `p_id` , `name` , `mobile` , `d_id`, `case_id` , `status` FROM `patient` INNER JOIN `case` ON patient.p_id = case.pat_id AND `d_id`='$doc_id' AND `status`='Pending'");
				 while($br = mysql_fetch_array($sql))
  {
	  echo'
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star">'.$br['p_id'].'</td>
                    <td class="mailbox-name">'.$br['name'].'</td>
                    <td class="mailbox-subject">'.$br['case_id'].'</td>
					<td class="mailbox-subject">'.$br['mobile'].'</td>
					<td class="mailbox-name">'.$br['status'].'</td>
                    <td class="mailbox-date"><a name="view" type="button" href="ViewCreated.php?pid='.$br['p_id'].'" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i></a></td>
                  </tr>';
  }
				  ?>
				  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
		
				  </div>
                </form>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
				<!--Pending-->
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
	<div class="modal fade" id="modal1" role="dialog">
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
		<div class="form-group">
            <center>	<label for="receipt"><h4>Total Payable Amount </h4> </label></center>
            	<div>
            		<input type="text" class="form-control" id="receipt" value="" disabled>
            	</div>
            </div>
			<div class="form-group">
            <label for="receipt">Select Payment Method</label>
            	<div>
            		<select class="form-control">
                       <option selected disabled>---SELECT DOCTOR---</option>
                       <option value="">Account Payment</option>
                       <option value="">Cheque</option>
                       <option value="">Hand Cash</option>
                    </select>
            	</div>
            </div>
			   <div class="form-group">
            	<label for="fname">Account Holder Name </label>
            	<div>
            		<input type="text" class="form-control" id="fname" disabled>
            	</div>
             </div>
	<!--Account Payment-->
	<div>
   <div class="form-group">
            	<label for="fname">Account Number </label>
            	<div>
            		<input type="text" class="form-control" id="fnum" disabled>
            	</div>
    </div>
             <div class="form-group">
            	<label for="sname">Date</label>
            	<div>
            		<input type="text" class="form-control" id="date" disabled>
            	</div>
            </div>
            <div class="form-group">
            	<label for="email">Initial Payment  </label>
				<div class="row">
            	<div class="col-sm-6">
            		<input type="text" class="form-control" id="initial" style="width:100%;"> 
					</div>
					<div class="col-sm-6">
					<input type="button" class="btn btn-primary" id="initial" value="Paid">
            	</div>
				</div>
            </div>
				<div>
            	<input type="button" class="btn btn-primary pull-left" id="balance" value="View Balance" onclick="ShowDiv()">
            	</div></br>	</br>	 
			  <div class="form-group">
			  
				<div id="bal" style="display:none;">
            	<label for="final">Final Payment  </label>
            	<div class="row">
            	<div class="col-sm-6">
            		<input type="text" class="form-control" id="final" style="width:100%;"> 
					</div>
					<div class="col-sm-6">
					<input type="button" class="btn btn-primary" id="final" value="Paid">
            	</div>
				</div>
				</div>
				<script>
				function ShowDiv() {
    document.getElementById("bal").style.display = "";
}
				</script>
            </div>
			</div>
		
	</div></br></br>
  </div>
</form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
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