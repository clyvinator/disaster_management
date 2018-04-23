<?php	include("database.php");
		$rid = $_POST['rescue_id'];
		foreach($rid as $val) {
			$sql = "delete from rescue where rid =".$val;
			mysql_query($sql);
		}
?>
<script type="text/javascript">
	alert("hi")
</script>