<?php	

session_start();
		error_reporting(E_ALL ^ E_NOTICE);
		ini_set('session.gc_maxlifetime', 60*60*24);
		
		
	function connect_database(){
		date_default_timezone_set('Asia/Kolkata');
		$con = mysql_connect("localhost","root","root");

		$db = "disaster";
		mysql_select_db($db);
		return $con;
	}
	connect_database();
	Function ESQ($strtext) {
		$strtext = mysql_real_escape_string($strtext,connect_database());
		return $strtext;
	}
	
	function left_ui_admin(){
?>
	<script type="text/javascript" src="../Admin/assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
		
		<?php }	
			?>