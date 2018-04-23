<?php	

session_start();
		error_reporting(E_ALL ^ E_NOTICE);
		ini_set('session.gc_maxlifetime', 60*60*24);
		
		
	function connect_database(){
		date_default_timezone_set('Asia/Kolkata');
		$con = mysql_connect("localhost","root","root");

		$db = "newsportal";
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
    <link rel="stylesheet" type="text/css" href="../Admin/assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Admin/assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="../Admin/assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../Admin/assets/css/style-default.css">
		
		<?php }
			function pagination($file,$total_pages){ 
				global $pageno;	
			?>
				<div style="width:270px;height:25px;float:left;margin-top:10px;">
				<?php if(($pageno-2) > 0){ $page1 = ($pageno-2); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page1; ?>);"><?php print ($pageno-2); ?></div><?php } ?>
				<?php if(($pageno-1) > 0){ $page2 = ($pageno-1); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page2; ?>);"><?php print ($pageno-1); ?></div><?php } ?>
					<div style="width:45px;height:23px;float:left;line-height:23px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#ffffff;color:#7e9fbf;border:1px solid #7e9fbf;margin-left:3px;cursor:pointer;"><?php print $pageno; ?></div>
					<?php if($total_pages >= ($pageno+1)){ $page4 = ($pageno+1); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page4; ?>);"><?php print ($pageno+1); ?></div><?php } ?>
					<?php if($total_pages >= ($pageno+2)){ $page5 = ($pageno+2); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page5; ?>);"><?php print ($pageno+2); ?></div><?php } ?>
				</div>
		<?php }

				function pagination_news($file,$total_pages){ 
				global $pageno,$mynewstype;	
			?>
				<div style="width:270px;height:25px;float:left;margin-top:10px;">
				<?php if(($pageno-2) > 0){ $page1 = ($pageno-2); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page1; ?>,'<?php print $mynewstype; ?>');"><?php print ($pageno-2); ?></div><?php } ?>
				<?php if(($pageno-1) > 0){ $page2 = ($pageno-1); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page2; ?>,'<?php print $mynewstype; ?>');"><?php print ($pageno-1); ?></div><?php } ?>
					<div style="width:45px;height:23px;float:left;line-height:23px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#ffffff;color:#7e9fbf;border:1px solid #7e9fbf;margin-left:3px;cursor:pointer;"><?php print $pageno; ?></div>
					<?php if($total_pages >= ($pageno+1)){ $page4 = ($pageno+1); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page4; ?>,'<?php print $mynewstype; ?>');"><?php print ($pageno+1); ?></div><?php } ?>
					<?php if($total_pages >= ($pageno+2)){ $page5 = ($pageno+2); ?>
					<div style="width:45px;height:25px;float:left;line-height:25px;font-family:Segoe UI,Arial;font-size:13px;text-align:center;font-weight:normal;background:#7e9fbf;color:#ffffff;margin-left:3px;cursor:pointer;"onclick="pagecontent(<?php print $page5; ?>,'<?php print $mynewstype; ?>');"><?php print ($pageno+2); ?></div><?php } ?>
				</div>
		<?php }
		?>
