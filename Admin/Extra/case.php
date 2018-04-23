<?php
include('DoctorHeader.php');
?>
<script type="text/javascript">
	  function ShowHideDiv(){
	  	var change = document.getElementById("changeid");
		var approve = document.getElementById("approveid");
		if(change.checked){
			div1.style.display="block";
			approve.checked=false;
		}
	  }
	   function ShowHideDiv1(){
	  	var change = document.getElementById("changeid");
		var approve = document.getElementById("approveid");
		if(approve.checked){
			div1.style.display="none";
			change.checked=false;
		}
	  }
	  </script>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content">
        
        
        <div class="box">
        	<div class="box-header">
            <label style="font-size:20px;"> Case Details </label>
            </div>
                       
              <div class="box-body">
               <!--<div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Doctor's name : </label>
                   </div>
                  <div class="col-md-4">
                      <label> Abc </label>
                  </div>
                  <div class="col-md-2">
                           <label> Doctor's ID : </label>
                   </div>
                  <div class="col-md-4">
                      <label> Doc123 </label>
                  </div>
              </div>-->
              
             <!-- <div class="row"  style="padding:20px;">
                   <div class="col-md-2">
                           <label> Doctor's ID : </label>
                   </div>
                  <div class="col-md-10">
                      <label> Doc123 </label>
                  </div>
              </div>-->
              
              <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Patient's name : </label>
                   </div>
                  <div class="col-md-4">
                      <label> def </label>
                  </div>
                  <div class="col-md-2">
                           <label> Patient's Age : </label>
                   </div>
                  <div class="col-md-4">
                      <label> 40 </label>
                  </div>
              </div>
              
             <!-- <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Patient's Age : </label>
                   </div>
                  <div class="col-md-10">
                      <label> 40 </label>
                  </div>
              </div>-->
              
              <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Patient's Gender : </label>
                   </div>
                  <div class="col-md-4">
                      <label>Male </label>
                  </div>
                   <div class="col-md-2">
                           <label> Patient's Email-Id : </label>
                   </div>
                  <div class="col-md-4">
                      <label> def </label>
                      </div>
              </div>
              
             <!-- <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Patient's Email-Id : </label>
                   </div>
                  <div class="col-md-10">
                      <label> def@gmail.com </label>
                  </div>
              </div>
              -->
              <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label>Patient Allergic to : </label>
                   </div>
                  <div class="col-md-4">
                      <label> vvvvvvvvv </label>
                  </div>
                   <div class="col-md-2">
                           <label> Chief complaint : </label>
                   </div>
                  <div class="col-md-4">
                      <label> tttttttttttttt </label>
                  </div>
              </div>
              
              <!--<div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Chief complaint : </label>
                   </div>
                  <div class="col-md-10">
                      <label> tttttttttttttt </label>
                  </div>
              </div>-->
              
              <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Treatment Plan : </label>
                   </div>
                  <div class="col-md-4">
                      <label> Extraction </label>
                  </div>
              </div>
              
              
              <div class="row" style="padding:20px;">
                   <div class="col-md-2">
                           <label> Images Uploaded : </label>
                   </div>
                   
                  <div class="col-md-10">
                  <!--<label> Intra-oral</label>-->
                 <div class="row">
                      <div class="col-md-4" style="padding:0px;">
                        <label  class="control-label">Frontal Profile-smiling </label>
                           <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                           <br>
                           <a href="#">Download Image</a>
                      </div>
                      
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                      </div>
                      <br>
                      <div class="row">
                          <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                      </div>
                      <br>
                      <div class="row">
                      <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                      
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                     <div class="col-md-4" style="padding:0px;">
                      <label  class="control-label">Frontal Profile-smiling </label>
                         <img src="../Records/ExtraoralFrontalProfile-smiling.jpg" style="border:2px solid #E3E2DF; float:none;" class="img-rounded" alt="Cinque Terre" width="75%" height="200">
                         <br>
                         <a href="#">Download Image</a>
                      </div>
                      </div>
                   
                  </div>
              </div>
              
              <div class="row">
              <div class="col-md-2">
             <strong> Uploaded Video : </strong>
              </div>
                <div class="col-md-10">
       			<video class="img-thumbnail" src="Frozen.2013.1080p.BluRay.x264.YIFY.mp4" controls height="550px" width="550px"/>
                 
                 </div>
                 
           		 </div>
                 
                
        		
        
              
          </div>
        
        </div>
        
        
        
        
        
        
        </section>
	
    </div>
<?php
include('DoctorFooter.php');
?>

 
      <div class="control-sidebar-bg"></div>
     

    </div><!-- ./wrapper -->

      
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>