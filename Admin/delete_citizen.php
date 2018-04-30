<?php	include("database.php");
		$cid = $_POST['citizen_id'];
		foreach($cid as $val) {
			$sql = "delete from citizen where cid =".$val;
			mysql_query($sql);
		}
?>
<script type="text/javascript">
	alert("hi")
</script>