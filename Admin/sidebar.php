<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
	    <li class="treeview">
          <a href="Adminhomepage.php">
            <i class="fa fa-map"></i> <span>Location</span> 
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cloud"></i>
            <span>Rescue Team</span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="add_rescue.php"><i class="fa fa-plus"></i>Add</a></li>
            <li><a href="list_rescue.php"><i class="fa fa-pencil-square-o"></i>Edit/Delete</a></li>
          </ul>
        </li>
	    <li class="treeview">
          <a href="list_user.php">
            <i class="fa fa-pencil-square-o"></i> <span>View Rescue Team</span> 
          </a>
        </li>
		<li class="treeview">
          <a href="disaster_profile.php">
            <i class="fa fa-search"></i> <span>Monitoring</span>
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
<form action="" method="post" enctype="multipart/form-data">
   <div class="modal-body">
	<div class="col-md-12">
		<div class="row">
			<!--Browse-->
			<div class="col-md-12">  
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" data-toggle="modal" data-target=".demo-popup">
					<span class="fileupload-new"><i class="glyphicon glyphicon-picture"></i></br>Browse</span>
						<input type="file" name="browse" id="browse"/>
					</span>
					<span class="fileupload-preview"></span>
						<!-- <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
				</div> 
			</div>
		</div>
	</div><br/><br/>
	<form method="post">
	  <br/><br/> <input type="submit" class="btn btn-default" value="Upload Image" name="upload">
	   </form>
  </div>
</form>

</center>
      </div>
      
    </div>
  </div>
 
