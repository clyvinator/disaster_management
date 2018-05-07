<?php	include("database.php");
		if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
          header('location:Adminlogin.php');
        }
		$cid = $_POST['citizen_id'];
		foreach($cid as $val) {
			$sql = "delete from citizen where cid =".$val;
			mysql_query($sql);
		}
?>
<script type="text/javascript">
	alert("hi")
</script>