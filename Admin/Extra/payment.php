<?php
include('DoctorHeader.php');
?>
<script type="text/javascript">
    function ShowHideDiv() {
        var debit = document.getElementById("debit");
        var div1 = document.getElementById("div1");
		var credit = document.getElementById("credit");
		var net = document.getElementById("net");
        //div1.style.display = debit.checked ? "block" : "none";
		if(debit.checked)
		{
			div1.style.display="block";
			div2.style.display="none";
			div3.style.display="none";
			credit.checked=false;
			net.checked=false;
		}
    }
	
	function ShowHideDiv1() {
        var credit = document.getElementById("credit");
        var div2 = document.getElementById("div2");
		var debit = document.getElementById("debit");
		var net = document.getElementById("net");
        //div2.style.display = credit.checked ? "block" : "none";
		if(credit.checked)
		{
			div2.style.display="block";
			div1.style.display="none";
			div3.style.display="none";
			debit.checked=false;
			net.checked=false;
		}
    }
	
	function ShowHideDiv3() {
        var net = document.getElementById("net");
        var div3 = document.getElementById("div3");
		var debit = document.getElementById("debit");
		var credit = document.getElementById("credit");
        //div2.style.display = credit.checked ? "block" : "none";
		if(net.checked)
		{
			div3.style.display="block";
			div1.style.display="none";
			div2.style.display="none";
			credit.checked=false;
			debit.checked=false;
		}
    }
</script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content">
            <div class="form-group">
            <label style="font-size:24px"> Payment details </label>
            </div>
        
		  
		   <div class="col-md-9">
                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Make payment</a></li>
                  <li><a href="#timeline" data-toggle="tab">Transaction History</a></li>
                 <!--  <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane box" id="activity"> <br>
                     
        <br>
        <form method="post" action="#">
        <!-- Main content -->
       <!-- <section class="content">-->
          <!-- <div class="example-modal"> -->
            <div class="box">
              <!-- <div class="modal-dialog"> -->
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    <h4 class="modal-title">Select a Payment Type</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                    <label>
                      <input type="radio" name="debit" onclick="ShowHideDiv()" id="debit"> Debit Card
                    </label>
                    </div>
					<div id="div1"  style="display: none">
					  <div class="form-group">
						<label for="exampleInputPassword1">Card Number</label>
                      
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Card Number">
                      
                  	  </div>
                        
                        
                        
                        
                       
                      <div class="form-group" >
                      <label for="exampleInputPassword1">CVV</label>
                      
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CVV">
                      </div>
                       
						<div class="form-group" >	
					 <!-- <div class="box-body"> -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label >Expiry Date</label>
									<select class="form-control " style="width: 100%;">
									  <option value="" selected disabled style="display:none">MM</option>
									  <option>January</option>
									  <option>February</option>
									  <option>March</option>
									  <option>April</option>
									  <option>May</option>
									  <option>June</option>
									  <option>July</option>
									  <option>August</option>
									  <option>September</option>
									  <option>October</option>
									  <option>November</option>
									  <option>December</option>
									</select>
								</div><!-- /.form-group -->
                 
							</div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label> &nbsp;</label>
									<select class="form-control" style="width: 100%;">
									  <option value="" selected disabled style="display:none">YY</option>
									  <option>2016</option>
									  <option>2017</option>
									  <option>2018</option>
									  <option>2019</option>
									  <option>2020</option>
									  <option>2021</option>
									  <option>2022</option>
									  <option>2023</option>
									  <option>2024</option>
									  <option>2025</option>
									  <option>2026</option>
									  <option>2027</option>
									  <option>2028</option>
									  <option>2029</option>
									  <option>2030</option>
									  <option>2031</option>
									  <option>2032</option>
									  <option>2033</option>
									  <option>2034</option>
									  <option>2035</option>
									  <option>2036</option>
									</select>
								</div><!-- /.form-group -->
                 
							</div><!-- /.col -->
						</div><!-- /.row -->
					<!-- </div> -->
                      
					</div>
					</div>
                    <div class="form-group">
                    <label>
                      <input type="radio"  class="flat-red" onclick="ShowHideDiv1()" id="credit"> Credit Card
                    </label>
					</div>
                    <div id="div2" style="display:none">
                    
                    
                     <div class="form-group">
						<label for="exampleInputPassword1">Card Number</label>
                      
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Card Number">
                      
                  	  </div>
                        
                        
                        
                        
                       
                      <div class="form-group" >
                      <label for="exampleInputPassword1">CVV</label>
                      
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CVV">
                      </div>
                       
						<div class="form-group" >	
					 <!-- <div class="box-body"> -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label >Expiry Date</label>
									<select class="form-control " style="width: 100%;">
									  <option value="" selected disabled style="display:none">MM</option>
									  <option>January</option>
									  <option>February</option>
									  <option>March</option>
									  <option>April</option>
									  <option>May</option>
									  <option>June</option>
									  <option>July</option>
									  <option>August</option>
									  <option>September</option>
									  <option>October</option>
									  <option>November</option>
									  <option>December</option>
									</select>
								</div><!-- /.form-group -->
                 
							</div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label> &nbsp;</label>
									<select class="form-control" style="width: 100%;">
									  <option value="" selected disabled style="display:none">YY</option>
									  <option>2016</option>
									  <option>2017</option>
									  <option>2018</option>
									  <option>2019</option>
									  <option>2020</option>
									  <option>2021</option>
									  <option>2022</option>
									  <option>2023</option>
									  <option>2024</option>
									  <option>2025</option>
									  <option>2026</option>
									  <option>2027</option>
									  <option>2028</option>
									  <option>2029</option>
									  <option>2030</option>
									  <option>2031</option>
									  <option>2032</option>
									  <option>2033</option>
									  <option>2034</option>
									  <option>2035</option>
									  <option>2036</option>
									</select>
								</div><!-- /.form-group -->
                 
							</div><!-- /.col -->
						</div><!-- /.row -->
					<!-- </div> -->
                      
					</div>
                    </div>
					
					<div class="form-group">
                    <label>
                      <input type="radio"  class="flat-red" onclick="ShowHideDiv3()" id="net"> Net Banking
                    </label>
					</div>
                    <div id="div3" style="display:none">
                    <div class="form-group">
						<label for="exampleInputPassword1">Select a Bank</label>
                      
						<select class="form-control " >
									  <option value="" selected disabled style="display:none">Bank</option>
									  <option>ICICI</option>
									  <option>State Bank of India</option>
									  <option>HDFC</option>
									  <option>HSBC</option>
									  <option>IDBI</option>
									  <option>ING Vysya</option>
									  <option>Axis bank</option>
									  <option>Andhra Bank</option>
									  <option>Bank of Baroda</option>
									  <option>Bank of India</option>
									  <option>Citi Bank</option>
									  <option>Karnataka Bank</option>
									</select>
                      
                  	  </div>
                    </div>
					
                  </div>
                  <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Back</button>-->
                    <a href="#"  class="btn btn-primary pull-left"> Back</a>
                    <input type="submit" class="btn btn-primary" value="Make Payment">
                  </div>
                </div><!-- /.modal-content -->
              <!-- </div> --><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          <!-- </div><!-- /.example-modal --> 

          
       <!-- </section>--><!-- /.content -->
		</form>
                    <!--<div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                        <span class='username'>
                          <a href="#">Principal.</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Shared publicly - 7:30 PM today</span>
                      </div>
                      <p>
                       <b>PANTHEON</b><br />
                          National level technical fest on <b>may 6</b>
                      </p>
                      <ul class="list-inline">
                        
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        
                    </div>-->
                     <!-- <hr>-->

                      <!--<div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                        <span class='username'>
                          <a href="#">Principal.</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Shared publicly - 9:30 PM today</span>
                      </div>
                      <p>
                       <b>GRADUATION </b><br />
                          Graduation day on <b>may 16</b>
                      </p>
                      <ul class="list-inline">
                        
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        
                    </div>-->
                    <!-- Post -->
                   <!--  <div class="post clearfix">
                      <div class='user-block'>
                        <img class='img-circle img-bordered-sm' src='../../dist/img/user7-128x128.jpg' alt='user image'>
                        <span class='username'>
                          <a href="#">Sarah Ross</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Sent you a message - 3 days ago</span>
                      </div>
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class='form-horizontal'>
                        <div class='form-group margin-bottom-none'>
                          <div class='col-sm-9'>
                            <input class="form-control input-sm" placeholder="Response">
                          </div>                          
                          <div class='col-sm-3'>
                            <button class='btn btn-danger pull-right btn-block btn-sm'>Send</button>
                          </div>                          
                        </div>                        
                      </form>
                    </div> -->

                    <!-- Post -->
                    <!-- <div class="post">
                      <div class='user-block'>
                        <img class='img-circle img-bordered-sm' src='../../dist/img/user6-128x128.jpg' alt='user image'>
                        <span class='username'>
                          <a href="#">Adam Jones</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                        <span class='description'>Posted 5 photos - 5 days ago</span>
                      </div><!-- /.user-block --
                      <div class='row margin-bottom'>
                        <div class='col-sm-6'>
                          <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                        </div>
                        <div class='col-sm-6'>
                          <div class='row'>
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo2.png' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo3.jpg' alt='Photo'>
                            </div>
                            <div class='col-sm-6'>
                              <img class='img-responsive' src='../../dist/img/photo4.jpg' alt='Photo'>
                              <br>
                              <img class='img-responsive' src='../../dist/img/photo1.png' alt='Photo'>
                            </div>
                          </div>
                        </div>
                      </div>

                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div> -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane box" id="timeline">
                  <br>
                 
                    <!-- The timeline -->
                   <!-- <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-comments-o"></i>-->
                  <!--<h3 class="box-title">Chat</h3>-->
                 <!-- <div class="box-tools pull-right" data-toggle="tooltip" title="Status">-->
                    <!--<div class="btn-group" data-toggle="btn-toggle" >
                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>-->
                 <!-- </div>
                </div>
                <div class="box-body chat" id="chat-box">-->
                  <!-- chat item -->
                  <!--<div class="item">
                    <img src="../images/user4-128x128.jpg" alt="user image" class="online">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                        Doctor 
                      </a>
                      I would like to discuss about the Case No.1
                    </p>
                    <div class="attachment">
                      <h4>Attachments:</h4>
                      <p class="filename">
                        Theme-thumbnail-image.jpg
                      </p>
                      <div class="pull-right">
                        <button class="btn btn-primary btn-sm btn-flat">Open</button>
                      </div>
                    </div>
                  </div>-->
                  
                  <!--<div class="item">
                    <img src="../images/user3-128x128.jpg" alt="user image" class="offline">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                        FastAlign - Admin
                      </a>
                      I would like to discuss about the Case No.1
                    </p>
                  </div>-->
                  
                  <!--<div class="item">
                    <img src="../images/user4-128x128.jpg" alt="user image" class="offline">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                        Doctor
                      </a>
                      I would like to discuss about the Case No.1
                    </p>
                  </div>-->
                <!--</div>-->
                <!--<div class="box-footer">
                  <div class="input-group">
                   
                    <input class="form-control" placeholder="Type message...">
                    
                    <div class="input-group-btn">
                      <button class="btn btn-success"><i class="fa fa-plus"></i> POST</button>
                    </div> 
                  </div>
                </div>-->
              <!--</div>-->
                  </div><!-- /.tab-pane -->

                  <!-- <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div> --><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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