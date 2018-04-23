<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/imgareaselect-animated.css" />
	<!-- scripts -->
	
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.imgareaselect.min.js"></script>
	<script type="text/javascript" src="js/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
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
</head>
<body>

<div class="wrap">
	<!-- image preview area-->
	<img id="uploadPreview" style="display:none;"/>
	
	<!-- image uploading form -->
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/jpeg" name="image" />
		<input type="submit" value="Upload">

		<!-- hidden inputs -->
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
	</form>
</div><!--wrap-->

</body>
</html>