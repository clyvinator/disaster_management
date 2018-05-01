<?php	include("database.php");
if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
          header('location:Adminlogin.php');
        }
		$rid = $_POST['rescue_id'];
		foreach($rid as $val) {
			$sql = "delete from rescue where rid =".$val;
			mysql_query($sql);
		}
?>
<script type="text/javascript">
	alert("hi")
</script>