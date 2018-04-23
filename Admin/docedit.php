	        <!-- Content Wrapper. Contains page content -->
<style>
label{font-weight:500}
.box-title{font-weight:600}
</style>
    <section class="content">
	<form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<?php
			include('connect.php');
			$id=$_GET['pid'];
			$sql=mysql_query("SELECT * FROM `patient` INNER JOIN `case` INNER JOIN `images` ON patient.p_id = case.pat_id AND case.case_id = images.c_id WHERE `p_id`='$id'");
			while($br = mysql_fetch_assoc($sql))
			{
				?>			 		
		<div class="box">
		      <div class="box-header with-border">
          <h3 class="box-title">Patient ID : <?php echo $br['p_id']; ?></h3>
		  <input type="hidden" name="patid" value="<?php echo $br['p_id']; ?>"> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
            <div class="panel">	
  <div class="panel-body">
  
		   <div class="form-group">  
						<label for="fname" class="col-sm-2">Full Name : </label>
						<div class = "col-sm-10">
							<input type="text" class="form-control" id="fname" name="fname" value="<?php echo $br['name']; ?>" style="width:70%;"><!--<button class="btn btn-secondary"  onclick="showHideButton();" type="button" id="pnameedit" style="margin-left:80%; margin-top:-9.9%;"><i class="fa fa-edit"></i></button>-->
						</div>
					<!--<button type="submit" name="fnameupdate" class="btn btn-primary" id="fnameupdate"  style="display:none;">Update</button>-->		
			</div>

             <div class="form-group">
            	<label for="age" class="col-sm-2">Age : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="age" name="age" value="<?php echo $br['age']; ?>" style="width:70%;"><!--<button class="btn btn-secondary" type="button" id="pageedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>-->
            	</div>
            </div>
           <div class="form-group">
		   <label for="gender" class="col-sm-2">Gender : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="gender" name="gender" value="<?php echo $br['gender']; ?>" style="width:70%;"><!--<button class="btn btn-secondary" type="button" id="pgenderedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>-->
            	</div>
            </div>
			  <div class="form-group">
            	<label for="mobile" class="col-sm-2">Mobile Number : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $br['mobile']; ?>" style="width:70%;"><!--<button class="btn btn-secondary" type="button" id="pmobedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>-->
            	</div>
            </div>
  
  </div>
</div>
</div><!--body-->
</div><!--box-->
<div class="box">
 <div class="box-header with-border">
          <h3 class="box-title">Case ID : <?php echo $br['case_id']; ?></h3>
				<input type="hidden" name="csid" value="<?php echo $br['case_id']; ?>">
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
            		<input type="text" class="form-control" id="allergy" name="allergic" value="<?php echo $br['allergic']; ?>"  style="width:70%;" ><!-- <button class="btn btn-secondary" type="button" id="palledit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>--> 
            	</div>
            </div>
			<div class="form-group">
            	<label for="complaint" class="col-sm-2">Chief Complaint : </label>
            	<div class = "col-sm-10">
            		<input type="text" class="form-control" id="complaint" name="chief_comp" value="<?php echo $br['chief_comp']; ?>" style="width:70%;"> <!--<button class="btn btn-secondary" type="button" id="pcompedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>-->
            	</div>
            </div>
            <div class="form-group">
            	<label for="other" class="col-sm-2">Other Details (MidLine): </label>
            	<div class = "col-sm-10">
            		<textarea rows="5" class="form-control" id="other" name="other_det" style="width:70%;" value=""> <?php echo $br['other_det']; ?> </textarea><!--<button class="btn btn-secondary" type="button" id="pothedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>-->
            	</div>
            </div>
            
        <div class="form-group">
            	<label class="col-sm-2"  style="margin-top:5px;">Treatment plan : </label> 
				
            	<div class= "col-sm-10">
				<input type="text" class="form-control" id="no" name="treatment_plan" value="<?php echo $br['treatment_plan']; ?>" style="width:70%;"><!--<button class="btn btn-secondary" type="button" id="pplanedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>--></br>
             		<input type="text" class="form-control" id="no" name="extract_tooth_no" value="<?php echo $br['extract_tooth_no']; ?>" style="width:70%;"><!--<button class="btn btn-secondary" type="button" id="pnoedit" style="margin-left:70%; margin-top:-6.9%;"><i class="fa fa-edit"></i></button>--> 
            	</div>
			</div></div></div></div></div>
<div class="box">
 <div class="box-header with-border">
          <h3 class="box-title">Images</h3>

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
							<div class="col-md-4" id="portfolio" >
							<label  class="control-label" style="text-align:center">Anterior frontal </label>
							<input type="hidden" id="img" name="img" value="<?php echo $br['anterior_frontal'];?>">
								<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="af" style="border:2px solid #E3E2DF"   name="Anterior_frontal" width="400" height="200" src="uploads/Intra-oral/<?php echo $br['anterior_frontal'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="fa fa-upload"></i></span>
															<input type="file" name="Anterior_frontal" id="Anterior_frontal" />
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
									<input type="hidden" id="img1" name="img1" value="<?php echo $br['buccal_leftside'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="bls" style="border:2px solid #E3E2DF"   name="Buccal_left_side" width="400" height="200" src="uploads/Intra-oral/<?php echo $br['buccal_leftside']; ?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Buccal_left_side" id="Buccal_left_side" />
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
									<input type="hidden" id="img2" name="img2" value="<?php echo $br['buccal_rightside'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="blr" style="border:2px solid #E3E2DF"  name="Buccal_right_side" width="400" height="200" src="uploads/Intra-oral/<?php echo $br['buccal_rightside']; ?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Buccal_right_side" id="Buccal_right_side" value="<?php echo $br['buccal_rightside']; ?>"/>
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
									<input type="hidden" id="img3" name="img3" value="<?php echo $br['lower_occlusal'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="lo" style="border:2px solid #E3E2DF"  name="Lower_occlusal" width="400" height="250" src="uploads/Intra-oral/<?php echo $br['lower_occlusal'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Lower_occlusal" id="Lower_occlusal" value="<?php echo $br['lower_occlusal'];?>"/>
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
									<input type="hidden" id="img4" name="img4" value="<?php echo $br['upper_occlusal'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="uo" style="border:2px solid #E3E2DF"  name="Upper_occlusal" width="400" height="250" src="uploads/Intra-oral/<?php echo $br['upper_occlusal'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Upper_occlusal" id="Upper_occlusal" value="<?php echo $br['upper_occlusal'];?>"/>
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
					     <div class="col-md-12"  style="font-size:20px;">
						<label> Extra-oral </label>
						<hr style="width:100%;">
                    </div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" id="portfolio">
									<label  class="control-label">Frontal Profile </label>
									<input type="hidden" id="img5" name="img5" value="<?php echo $br['frontal_profile'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:280px;height:330px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="fp" style="border:2px solid #E3E2DF"  name="Frontal_Profile" width="280" height="330" src="uploads/Intra-oral/<?php echo $br['frontal_profile'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Frontal_Profile" id="Frontal_Profile" value="<?php echo $br['frontal_profile'];?>"/>
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
									<input type="hidden" id="img6" name="img6" value="<?php echo $br['frontal_simling'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%;  width:280px;height:330px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="fps" style="border:2px solid #E3E2DF"  name="Frontal_Profile_smiling" width="280" height="330" src="uploads/Intra-oral/<?php echo $br['frontal_simling'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Frontal_Profile_smiling" id="Frontal_Profile_smiling" value="<?php echo $br['frontal_simling'];?>"/>
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
									<input type="hidden" id="img7" name="img7" value="<?php echo $br['side_profile'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%;  width:280px;height:330px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="sp" style="border:2px solid #E3E2DF"  name="Side_Profile" width="280" height="330" src="uploads/Intra-oral/<?php echo $br['side_profile']; ?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
														<span class="btn btn-primary btn-file" id="uplimg">
														<span class="fileupload-new"><i class="glyphicon glyphicon-camera" style="margin-top:-5px"></i></span></span>
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Side_Profile" id="Side_Profile" value="<?php echo $br['side_profile']; ?>"/>
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
								<input type="hidden" id="img8" name="img8" value="<?php echo $br['lateral_cephalometry'];?>">
								<div class="container-fluid" style="margin-left:-2%; margin-top:1%;  width:280px;height:330px">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="lc" style="border:2px solid #E3E2DF"  name="Lateral_Cephalometry" width="280" height="330" src="uploads/Intra-oral/<?php echo $br['lateral_cephalometry'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Lateral_Cephalometry" id="Lateral_Cephalometry" value="<?php echo $br['lateral_cephalometry'];?>"/>
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
									<input type="hidden" id="img9" name="img9" value="<?php echo $br['panoramin_radiography'];?>">
									<div class="container-fluid" style="margin-left:-2%; margin-top:1%; width:100%;">
									<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
									
										<div class="folio-image">
											<img id="pr" style="border:2px solid #E3E2DF"  name="Panoramin_Radiography" width="400" height="200" src="uploads/Intra-oral/<?php echo $br['panoramin_radiography'];?>"/>
										</div>
										<div class="overlay">
											<div class="overlay-content">
												<div class="overlay-text">
													<div class="folio-overview">
														<div class="fileupload fileupload-new" data-provides="fileupload">
					<span class="btn btn-primary btn-file" id="uplimg">
					<span class="fileupload-new"><i class="fa fa-upload"></i></span>
						<input type="file" name="Panoramin_Radiography" id="Panoramin_Radiography" value="<?php echo $br['panoramin_radiography'];?>"/>
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
            <div class="row-md-1">
             <button type="reset" name="reset" class="btn btn-primary pull-left" style="height:10%;width:10%;margin-bottom:50px;background:linear-gradient(#f5a62a, #fcbe5d);border:0px">Reset</button>
             <button type="submit" name="update" class="btn btn-primary pull-right" style="height:10%;width:10%;margin-bottom:50px;background:linear-gradient(#f5a62a, #fcbe5d);border:0px">Update</button>
			</div>
</div>
			 <?php
			}
			?>
</form>
<?php
include('connect.php');
if(isset($_POST['update'])){
	$pid=$_POST['patid'];
	$cid=$_POST['csid'];
	$a=$_POST['fname'];
	$b=$_POST['age'];
	$c=$_POST['gender'];
	$d=$_POST['email'];
 	$e=$_POST['mobile'];
	$f=$_POST['land'];
	$g=$_POST['allergic'];
	$h=$_POST['chief_comp'];
	$i=$_POST['other_det'];
	$j=$_POST['treatment_plan'];
	$k=$_POST['extract_tooth_no'];
 
	//IMG
	if($_FILES["Anterior_frontal"]["size"]==0)
	{
		$img=$_POST['img'];
	}
	else
	{
		$image_name=rand(1000,100000)."-".$_FILES['Anterior_frontal']['name'];
		$img=$image_name;
		$path='/uploads/Intra-oral/'.$img;
	$image_type=$_FILES['Anterior_frontal']['type'];
	$image_size=$_FILES['Anterior_frontal']['size'];
	$image_tmp_name=$_FILES['Anterior_frontal']['tmp_name'];
	move_uploaded_file($image_tmp_name,"uploads/Intra-oral/$img");
	}
	
	//IMG1
	if($_FILES["Buccal_left_side"]["size"]==0)
	{
		$img1=$_POST['img1'];
	}
	else{
		$image_name1=rand(1000,100000)."-".$_FILES['Buccal_left_side']['name'];
		$img1=$image_name1;
	$path1='/uploads/Intra-oral/'.$img1;
	$image_type1=$_FILES['Buccal_left_side']['type'];
	$image_size1=$_FILES['Buccal_left_side']['size'];
	$image_tmp_name1=$_FILES['Buccal_left_side']['tmp_name'];
	move_uploaded_file($image_tmp_name1,"uploads/Intra-oral/$img1");
	}
	
	//IMG2
	if($_FILES["Buccal_right_side"]["size"]==0)
	{
		$img2=$_POST['img2'];
	}
	else{
    $image_name2=rand(1000,100000)."-".$_FILES['Buccal_right_side']['name'];
	$img2=$image_name2;
	$path2='/uploads/Intra-oral/'.$image_name2;
	$image_type2=$_FILES['Buccal_right_side']['type'];
	$image_size2=$_FILES['Buccal_right_side']['size'];
	$image_tmp_name2=$_FILES['Buccal_right_side']['tmp_name'];
	move_uploaded_file($image_tmp_name2,"uploads/Intra-oral/$img2");
	}
	
	//IMG3
	if($_FILES["Lower_occlusal"]["size"]==0)
	{
		$img3=$_POST['img3'];
	}
	else{
	 $image_name3=rand(1000,100000)."-".$_FILES['Lower_occlusal']['name'];
	 	$img3=$image_name3;
	$path3='/uploads/Intra-oral/'.$image_name3;
	$image_type3=$_FILES['Lower_occlusal']['type'];
	$image_size3=$_FILES['Lower_occlusal']['size'];
	$image_tmp_name3=$_FILES['Lower_occlusal']['tmp_name'];
	move_uploaded_file($image_tmp_name3,"uploads/Intra-oral/$img3");
	}
	
	//IMG4
	if($_FILES["Upper_occlusal"]["size"]==0)
	{
		$img4=$_POST['img4'];
	}
	else{
	$image_name4=rand(1000,100000)."-".$_FILES['Upper_occlusal']['name'];
	$img4=$image_name4;
	$path4='/uploads/Intra-oral/'.$image_name4;
	$image_type4=$_FILES['Upper_occlusal']['type'];
	$image_size4=$_FILES['Upper_occlusal']['size'];
	$image_tmp_name4=$_FILES['Upper_occlusal']['tmp_name'];
	move_uploaded_file($image_tmp_name4,"uploads/Intra-oral/$img4");
	}
	
	//IMG5
		if($_FILES["Frontal_Profile"]["size"]==0)
	{
		$img5=$_POST['img5'];
	}
	else{
	$image_name5=rand(1000,100000)."-".$_FILES['Frontal_Profile']['name'];
	$img5=$image_name5;
	$path5='/uploads/Intra-oral/'.$image_name5;
	$image_type5=$_FILES['Frontal_Profile']['type'];
	$image_size5=$_FILES['Frontal_Profile']['size'];
	$image_tmp_name5=$_FILES['Frontal_Profile']['tmp_name'];
	move_uploaded_file($image_tmp_name5,"uploads/Intra-oral/$img5");
	}
	
	//IMG6
		if($_FILES["Frontal_Profile_smiling"]["size"]==0)
	{
		$img6=$_POST['img6'];
	}
	else{
	$image_name6=rand(1000,100000)."-".$_FILES['Frontal_Profile_smiling']['name'];
	$img6=$image_name6;
	$path6='/uploads/Intra-oral/'.$image_name6;
	$image_type6=$_FILES['Frontal_Profile_smiling']['type'];
	$image_size6=$_FILES['Frontal_Profile_smiling']['size'];
	$image_tmp_name6=$_FILES['Frontal_Profile_smiling']['tmp_name'];
	move_uploaded_file($image_tmp_name6,"uploads/Intra-oral/$img6");
	}
	
	//IMG7
	if($_FILES["Side_Profile"]["size"]==0)
	{
		$img7=$_POST['img7'];
	}
	else{
	$image_name7=rand(1000,100000)."-".$_FILES['Side_Profile']['name'];
	$img7=$image_name7;
	$path7='/uploads/Intra-oral/'.$image_name7;
	$image_type7=$_FILES['Side_Profile']['type'];
	$image_size7=$_FILES['Side_Profile']['size'];
	$image_tmp_name7=$_FILES['Side_Profile']['tmp_name'];
	move_uploaded_file($image_tmp_name7,"uploads/Intra-oral/$img7");
	}
	
	//IMG8
		if($_FILES["Lateral_Cephalometry"]["size"]==0)
	{
		$img8=$_POST['img8'];
	}
	else{
	$image_name8=rand(1000,100000)."-".$_FILES['Lateral_Cephalometry']['name'];
	$img8=$image_name8;
	$path8='/uploads/Intra-oral/'.$image_name8;
	$image_type8=$_FILES['Lateral_Cephalometry']['type'];
	$image_size8=$_FILES['Lateral_Cephalometry']['size'];
	$image_tmp_name8=$_FILES['Lateral_Cephalometry']['tmp_name'];
	move_uploaded_file($image_tmp_name8,"uploads/Intra-oral/$img8");
	}
	 	
    //IMG9
	if($_FILES["Panoramin_Radiography"]["size"]==0)
	{
		$img9=$_POST['img9'];
	}
	else{
	$image_name9=rand(1000,100000)."-".$_FILES['Panoramin_Radiography']['name'];
	$img9=$image_name9;
	$path9='/uploads/Intra-oral/'.$image_name9;
	$image_type9=$_FILES['Panoramin_Radiography']['type'];
	$image_size9=$_FILES['Panoramin_Radiography']['size'];
	$image_tmp_name9=$_FILES['Panoramin_Radiography']['tmp_name']; 
	move_uploaded_file($image_tmp_name9,"uploads/Intra-oral/$img9");
	}
	
	 $sql1=mysql_query("UPDATE `patient` SET `name`='$a',`age`='$b',`gender`='$c',`email`='$d',`mobile`='$e',`landline`='$f' WHERE `p_id`='$pid'");
	 $sql2=mysql_query("UPDATE `case` SET `allergic`='$g',`chief_comp`='$h',`other_det`='$i',`treatment_plan`='$j',`extract_tooth_no`='$k' WHERE `case_id`='$cid'");
 	 $sql3=mysql_query("UPDATE `images` SET `anterior_frontal`='$img',`buccal_leftside`='$img1',`buccal_rightside`='$img2',`lower_occlusal`='$img3',`upper_occlusal`='$img4',`frontal_profile`='$img5',`frontal_simling`='$img6',`side_profile`='$img7',`lateral_cephalometry`='$img8',`panoramin_radiography`='$img9' WHERE `c_id`='$cid'"); 
			if($sql3==true){
				echo "<script>alert('Updated Sccessfully');
				window.location='docupdate.php?pid=".$pid."';
				</script>";
			}
			else{
				echo "<script>alert('Not Updated Sccessfully');</script>";
			} 
	
}
//SELECT `case_id`, `allergic`, `chief_comp`, `other_det`, `treatment_plan`, `extract_tooth_no`, `status`, `pat_id`, `video`, `description` FROM `case` WHERE 1
?>
</section>


    

