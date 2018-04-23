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
        		<label> Case 1 </label>
        	</div>
        	<div class="box-body">
        		<form role="form">
                <div class="row">
                <div class="col-sm-12">
       			 <video class="img-thumbnail" src="Frozen.2013.1080p.BluRay.x264.YIFY.mp4" controls height="550px" width="550px"/>
                 </div>
                 <div class="form-group">
            
            	<div class="col-sm-10">	
                <div class="radio-inline">
            		
                		<input type="radio" name="tplan" id="changeid" value="change" onClick="ShowHideDiv()">
                        	<label><b>Make Changes    </b>
                		</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		<input type="radio" name="tplan" id="approveid" value="approve" onClick="ShowHideDiv1()">  <label><b>					Approve</b>
                		</label>
           		 	
           		 	</div>
             		<div id="div1" style="display:none;">
                  <div class="row">
                    <div class="form-group">
                    	<label for="ptnum" class="col-sm-12">Changes Description </label>
                        <div class="col-sm-12">
                        	<textarea class="form-control" rows="4" id="ptnum"></textarea>
                    	</div>
                     </div>
                 </div>
                   </div>
             		
            			
                              
               </div>
               
            </div>
           		 </div>
                 
                </form>
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