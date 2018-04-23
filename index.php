<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<body>
<?php
ob_start();
echo "<script type='text/javascript'>window.top.location='Admin/Adminlogin.php';</script>"; exit;
ob_end_flush();
?>
</body>
</html>