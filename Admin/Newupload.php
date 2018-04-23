	        <!-- Content Wrapper. Contains page content -->
<style>
label{font-weight:500}
.box-title{font-weight:600}
</style>

    <section class="content">
		<form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="box">
		      <div class="box-header with-border">
          <h3 class="box-title">Patient Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
            <div class="panel">
  <div class="panel-body">
   <div class="form-group">
            	<label for="fname" class="col-sm-2">First Name : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="fname" name="fname">
            	</div>
    </div>
             <div class="form-group">
            	<label for="lname" class="col-sm-2">Last Name : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="lname" name="lname">
            	</div>
            </div>
             <div class="form-group">
            	<label for="age" class="col-sm-2">Age : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="age" name="age">
            	</div>
            </div>
            <div class="form-group">
            	<label class="col-sm-2">Gender : </label>
            	<div class="col-sm-10">
             		<div class="radio-inline">
            			<label class="col-sm-2">
                		<input type="radio" name="gender" id="maleid" value="male">Male
                		</label>
           		 	</div>
             		<div class="radio-inline">
            			<label class="col-sm-2">
                		<input type="radio" name="gender" id="femaleid" value="female">Female
                		</label>
           		 	</div>
            	</div>
            </div>
			  <div class="form-group">
            	<label for="mobile" class="col-sm-2">Mobile Number : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="mobile" name="mobile">
            	</div>
            </div>
  </div>
</div>
</div><!--body-->
</div><!--box-->
<div class="box">
 <div class="box-header with-border">
          <h3 class="box-title">Case Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
<div class="panel">
  <div class="panel-body">
     <div class="form-group">
            	<label for="allergy" class="col-sm-2">Allergic to : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="allergy" name="allergy">
            	</div>
            </div>
			<div class="form-group">
            	<label for="complaint" class="col-sm-2">Chief Complaint : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="complaint" name="complaint"> 
            	</div>
            </div>
			<div class="form-group">
            	<label class="col-sm-2">Treatment Objectives : </label>
            	<div class = "col-sm-10">
            		<textarea rows="5" class="form-control"> </textarea>
            	</div>
            </div>
            <div class="form-group">
            	<label for="other" class="col-sm-2">Other Details (MidLine): </label>
            	<div class = "col-sm-10">
            		<textarea rows="5" class="form-control" id="other" name="other"> </textarea>
            	</div>
            </div>
            
             <div class="form-group">
            	<label for="plan" class="col-sm-2"  style="margin-top:5px;">Treatment plan : </label>
            	<div class="col-sm-10">	
                <div class="radio">
            			<label class="col-sm-2">
                		<input type="radio" name="plan" id="nonextractid" value="nonextractor" onClick="ShowHideDiv1()">Non-Extraction
                		</label>
           		 	</div>
             		
             		<div class="radio">
            			<label class="col-sm-2">
                		<input type="radio" name="plan" id="extractid" value="extractor" onClick="ShowHideDiv()">Extraction
                		</label>
           		 	</div><br/>
					
					<div id="div1" style="display:none">
                    <div class="form-group">
                    	<label for="num" class="col-sm-2">Extraction Tooth number: </label>
                        <div class="col-sm-10">
                        	<input type="text" class="form-control" id="num" name="num">
                    	</div>
                     </div>
                     </div>
            	</div>
            </div>
			      <script type="text/javascript">
	  function ShowHideDiv(){
	  	var nonextract = document.getElementById("nonextractid");
		var extract = document.getElementById("extractid");
		if(extract.checked){
			div1.style.display="block";
			nonextract.checked=false;
		}
	  }
	   function ShowHideDiv1(){
	  	var nonextract = document.getElementById("nonextractid");
		var extract = document.getElementById("extractid");
		if(nonextract.checked){
			div1.style.display="none";
			extract.checked=false;
		}
	  }
	  </script>
			</div></div></div></div>
<div class="box">
 <div class="box-header with-border">
          <h3 class="box-title">Upload Images</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
<div>
  <div class="panel-body">
            <div class="form-group">
				<div class = "col-sm-15">
				<div class="panel">
                    <div class="panel-body">
					<div class="col-md-12" style="font-size:20px;">       
						<label>Intra-oral</label>
						<hr style="width:100%;">
					</div>
					<div class="col-md-12">
						<div class="row">
						<input type="hidden" class="img-responsive" id="avatar-edit-img" alt="" name="profpic" data-holder-rendered="true" width="20px" height="20px" value="<?=$_SESSION['image'];?>" />
							<div class="col-md-4" id="portfolio" >
							<label  class="control-label" style="text-align:center">Anterior frontal </label>
								<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="af" style="border:2px solid #E3E2DF"   name="Anterior_frontal" width="400" height="200" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
															<input type="file" name="Anterior_frontal" id="Anterior_frontal"/>
															<script>
															document.getElementById("Anterior_frontal").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("af").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
	</script>													</span>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									<!--<img src="../Records/Intraoralanteriorfrontal.jpg" style="border:2px solid #E3E2DF"  alt="Cinque Terre" width="100%" height="200">
							       </br><center><div class="box-body">
								   <button type="button" class="btn btn-primary" name="upload" style="width:100%;"><i class="fa fa-upload"></i> Upload</button>
								</div></center>-->
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Buccal left-side </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="bls" style="border:2px solid #E3E2DF"   name="Buccal_left_side" width="400" height="200" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Buccal_left_side" id="Buccal_left_side"/>
						<script>
						document.getElementById("Buccal_left_side").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("bls").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>												
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Buccal right-side </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="blr" style="border:2px solid #E3E2DF"  name="Buccal_right_side" width="400" height="200" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Buccal_right_side" id="Buccal_right_side"/>
						<script>
						document.getElementById("Buccal_right_side").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("blr").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>												
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Lower occlusal </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="lo" style="border:2px solid #E3E2DF"  name="Lower_occlusal" width="400" height="250" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Lower_occlusal" id="Lower_occlusal"/>
						<script>
						document.getElementById("Lower_occlusal").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("lo").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Upper occlusal </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="uo" style="border:2px solid #E3E2DF"  name="Upper_occlusal" width="400" height="250" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Upper_occlusal" id="Upper_occlusal"/>
						<script>
						document.getElementById("Upper_occlusal").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("uo").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
                </div>
					
                     <br/> 
                <div class="panel">
                    <div class="panel-body">
					    <div style="font-size:20px;">
						<label> Extra-oral </label>
						<hr style="width:100%;"></div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Frontal Profile </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:280px;height:330px;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="fp" style="border:2px solid #E3E2DF"  name="Frontal_Profile" width="280" height="330" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Frontal_Profile" id="Frontal_Profile"/>
						<script>
						document.getElementById("Frontal_Profile").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("fp").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Frontal Profile-smiling </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:280px;height:330px;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="fps" style="border:2px solid #E3E2DF"  name="Frontal_Profile_smiling" width="280" height="330" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Frontal_Profile_smiling" id="Frontal_Profile_smiling"/>
						<script>
						document.getElementById("Frontal_Profile_smiling").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("fps").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Side Profile </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:280px;height:330px;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="sp" style="border:2px solid #E3E2DF"  name="Side_Profile" width="280" height="330" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span>
														</span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Side_Profile" id="Side_Profile"/>
						<script>
						document.getElementById("Side_Profile").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("sp").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    </div>
				</div>
                    <br/>
					<div class="panel">
                        <div class="panel-body">
						     <div class="col-md-12"  style="font-size:20px;">
						<label> Radiography </label>
						<hr style="width:100%;">
                    </div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" id="portfolio">
								<label  class="control-label">Lateral Cephalometry </label>
								<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:280px;height:330px;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="lc" style="border:2px solid #E3E2DF"  name="Lateral_Cephalometry" width="280" height="330" src="../images/upload_button.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Lateral_Cephalometry" id="Lateral_Cephalometry"/>
						<script>
						document.getElementById("Lateral_Cephalometry").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("lc").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Panoramin Radiography(OPG) </label>
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="pr" style="border:2px solid #E3E2DF"  name="Panoramin_Radiography" width="400" height="200" src="../images/uploader.jpg"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Panoramin_Radiography" id="Panoramin_Radiography"/>
						<script>
						document.getElementById("Panoramin_Radiography").onchange = function () {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("pr").src = e.target.result;
                        };
                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                         };
	                   </script>
					</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					    </div>
					</div>   
            	</div>
            </div>
  </div>
</div>
</div>
</div>
			<div>      
			<div class="row-md-1">
			 <button type="reset" class="btn btn-primary pull-left" style="height:10%;width:10%;background:linear-gradient(#f5a62a, #fcbe5d);border:0px">Reset</button>
             <button type="submit" name="submit" class="btn btn-primary pull-right" style="height:10%;width:10%;background:linear-gradient(#f5a62a, #fcbe5d);border:0px">Submit</button>
			</div>
			</div>
			
</form>
<?php
include('connect.php');
if(isset($_POST['submit'])){
$d_id=$_SESSION['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname." ".$lname;
$age=$_POST['age'];
$gender=$_POST['gender'];
//$mail=$_POST['email'];
$mob=$_POST['mobile'];
//$land=$_POST['land'];
$alg=$_POST['allergy'];
$comp=$_POST['complaint'];
$oth=$_POST['other'];
$pln=$_POST['plan'];
$no=$_POST['num'];
$sql= mysql_query("insert into patient(`name`,`age`,`gender`,`mobile`,`d_id`,`date`)VALUES('$fullname','$age','$gender','$mob','$d_id',now())");
$s=mysql_query("SELECT max(`p_id` ) AS id FROM `patient`");
while($row=mysql_fetch_assoc($s))
		{
			$a=$row["id"];
$query=mysql_query("INSERT INTO `case`(`stages`,`allergic`, `chief_comp`, `other_det`, `treatment_plan`, `extract_tooth_no`,`status`,`pat_id`) VALUES ('Stage 1','$alg','$comp','$oth','$pln','$no','Created','$a')");
		}
if(isset($_POST['submit'])){
	$profpic=$_POST['profpic'];
	
	$image_name=rand(1000,100000)."-".$_FILES['Anterior_frontal']['name'];
	$path='/uploads/Intra-oral/'.$image_name;
	$image_type=$_FILES['Anterior_frontal']['type'];
	$image_size=$_FILES['Anterior_frontal']['size'];
	$image_tmp_name=$_FILES['Anterior_frontal']['tmp_name'];
	
	$image_name1=rand(1000,100000)."-".$_FILES['Buccal_left_side']['name'];
	$path1='/uploads/Intra-oral/'.$image_name1;
	$image_type1=$_FILES['Buccal_left_side']['type'];
	$image_size1=$_FILES['Buccal_left_side']['size'];
	$image_tmp_name1=$_FILES['Buccal_left_side']['tmp_name'];
	
    $image_name2=rand(1000,100000)."-".$_FILES['Buccal_right_side']['name'];
	$path2='/uploads/Intra-oral/'.$image_name2;
	$image_type2=$_FILES['Buccal_right_side']['type'];
	$image_size2=$_FILES['Buccal_right_side']['size'];
	$image_tmp_name2=$_FILES['Buccal_right_side']['tmp_name'];
	
	$image_name3=rand(1000,100000)."-".$_FILES['Lower_occlusal']['name'];
	$path3='/uploads/Intra-oral/'.$image_name3;
	$image_type3=$_FILES['Lower_occlusal']['type'];
	$image_size3=$_FILES['Lower_occlusal']['size'];
	$image_tmp_name3=$_FILES['Lower_occlusal']['tmp_name'];
	
	$image_name4=rand(1000,100000)."-".$_FILES['Upper_occlusal']['name'];
	$path4='/uploads/Intra-oral/'.$image_name4;
	$image_type4=$_FILES['Upper_occlusal']['type'];
	$image_size4=$_FILES['Upper_occlusal']['size'];
	$image_tmp_name4=$_FILES['Upper_occlusal']['tmp_name'];
	
	$image_name5=rand(1000,100000)."-".$_FILES['Frontal_Profile']['name'];
	$path5='/uploads/Intra-oral/'.$image_name5;
	$image_type5=$_FILES['Frontal_Profile']['type'];
	$image_size5=$_FILES['Frontal_Profile']['size'];
	$image_tmp_name5=$_FILES['Frontal_Profile']['tmp_name'];
	
	$image_name6=rand(1000,100000)."-".$_FILES['Frontal_Profile_smiling']['name'];
	$path6='/uploads/Intra-oral/'.$image_name6;
	$image_type6=$_FILES['Frontal_Profile_smiling']['type'];
	$image_size6=$_FILES['Frontal_Profile_smiling']['size'];
	$image_tmp_name6=$_FILES['Frontal_Profile_smiling']['tmp_name'];
	
	$image_name7=rand(1000,100000)."-".$_FILES['Side_Profile']['name'];
	$path7='/uploads/Intra-oral/'.$image_name7;
	$image_type7=$_FILES['Side_Profile']['type'];
	$image_size7=$_FILES['Side_Profile']['size'];
	$image_tmp_name7=$_FILES['Side_Profile']['tmp_name'];
	
	$image_name8=rand(1000,100000)."-".$_FILES['Lateral_Cephalometry']['name'];
	$path8='/uploads/Intra-oral/'.$image_name8;
	$image_type8=$_FILES['Lateral_Cephalometry']['type'];
	$image_size8=$_FILES['Lateral_Cephalometry']['size'];
	$image_tmp_name8=$_FILES['Lateral_Cephalometry']['tmp_name'];
	 	
	$image_name9=rand(1000,100000)."-".$_FILES['Panoramin_Radiography']['name'];
	$path9='/uploads/Intra-oral/'.$image_name9;
	$image_type9=$_FILES['Panoramin_Radiography']['type'];
	$image_size9=$_FILES['Panoramin_Radiography']['size'];
	$image_tmp_name9=$_FILES['Panoramin_Radiography']['tmp_name'];
	
	if($image_name==' '||$image_name1==' '||$image_name2==' '||$image_name3==' '||$image_name4==' '||$image_name5==' '||$image_name6==' '||$image_name7==' '||$image_name8==' '||$image_name9==' ')
	{
		echo"<script>alert('Select image')</script>";
	}
	else
		move_uploaded_file($image_tmp_name,"uploads/Intra-oral/$image_name"); 
	    move_uploaded_file($image_tmp_name1,"uploads/Intra-oral/$image_name1");
		move_uploaded_file($image_tmp_name2,"uploads/Intra-oral/$image_name2");
		move_uploaded_file($image_tmp_name3,"uploads/Intra-oral/$image_name3");
		move_uploaded_file($image_tmp_name4,"uploads/Intra-oral/$image_name4");
		move_uploaded_file($image_tmp_name5,"uploads/Intra-oral/$image_name5");
		move_uploaded_file($image_tmp_name6,"uploads/Intra-oral/$image_name6");
		move_uploaded_file($image_tmp_name7,"uploads/Intra-oral/$image_name7");
		move_uploaded_file($image_tmp_name8,"uploads/Intra-oral/$image_name8");
		move_uploaded_file($image_tmp_name9,"uploads/Intra-oral/$image_name9");
		
	   // echo "<script>alert('Image Uploaded Successfully')</script>";
		$s1=mysql_query("SELECT max(`case_id` ) AS id FROM `case`");
while($row=mysql_fetch_assoc($s1))
		{
			$a1=$row["id"];
		$qry=mysql_query("insert into images(`profile`,`anterior_frontal`,`buccal_leftside`,`buccal_rightside`,`lower_occlusal`,`upper_occlusal`,`frontal_profile`,`frontal_simling`,`side_profile`,`lateral_cephalometry`,`panoramin_radiography`,`c_id`) values('$profpic','$image_name','$image_name1','$image_name2','$image_name3','$image_name4','$image_name5','$image_name6','$image_name7','$image_name8','$image_name9','$a1')");
		}
		if($sql==true && $query==true && $qry==true)
{
	echo"<script>alert('Successful');</script>";
}
else{
	echo"<script>alert('NotSuccessful');</script>";
}
}
}
?>
</section>
    

