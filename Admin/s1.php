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
	<link rel="stylesheet" type="text/css" href="css/imgareaselect-animated.css" />
	<!-- scripts -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script> 
	<script type="text/javascript" src="js/jquery.imgareaselect.pack.js"></script>
	
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <section id="portfolio" >
	  <div class="container-fluid">
         <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="folio-image">
              <!--  <img class="img-responsive" src="../dist/img/profile1.jpg" width="20px" height="20px">-->
				<img class="img-responsive" id="avatar-edit-img" data-src="default.jpg"  data-holder-rendered="true" width="20px" height="20px" src="default.jpg"/>
              </div>
              <div class="overlay">
                <div class="overlay-content">
                  <div class="overlay-text">
                    <div class="folio-overview">
                  <a type="button" class="btn btn-primary" id="upload" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-camera"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  </section>
		   
		
      <div>
	  <center>
		<div class="responsive"> 
		<label><h5>Doctor ID</h5>
		<h4>Doctor Name</h4></label>
		</div>
		</center>
		 </div>
      </br>
      <ul class="sidebar-menu">
	          <li class="active treeview">
          <a href="Newcase.php">
            <i class="fa fa-book"></i> <span>Cases</span> 
          </a>
        </li>
	  <li>
          <a href="Docprofile.php">
            <i class="fa fa-book"></i> <span>Patient</span>
          </a>
        </li>
		<li>
          <a href="Support.php" data-toggle="chat" data-target="#chat">
            <i class="fa fa-support"></i> <span>Support</span>
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
   <div class="modal-body">
<?php include('up.php');?>
  </div>

</form>
</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
