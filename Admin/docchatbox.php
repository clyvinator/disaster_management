<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:../index.php");
} else{
?>
<html>
<head>
<title>Facebook Chat</title>
 <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="chat.js"></script>
<script src="script.js"></script>
<!--<script src="script.js"></script>-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>Welcome <?=$_SESSION['name']; ?></header>
<a class="user" href="" name="chat" >See Chat</a>
<body>
<form method="post" id="chatform" onSubmit="return false;">
<div class="msg_box" style="right:290px;">
<div class="msg_head"><?=$_SESSION['name']; ?>
<div class="close">x</div>
</div>
<div class="msg_wrap">
	<div class="msg_body">
	<div class="pull-left"><input type="hidden" name="name" id="name" value="<?=$_SESSION['name']; ?>"></div>
	<div class="chatMessages">
	<!--<div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left" style="margin-left:12px;">Admin</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
     </div>
				  <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image" style="margin:10px;"><!-- /.direct-chat-img -->
	</div>	
	</div>
	
	<div class="msg_footer">
	<input type="text" class="msg_input" name="text" id="text" value="" placeholder="type chat message">
	<input type="submit" name="submit" value="post" style="margin-left:80%;">
	</div>

</div>
</div>
</form>
</body>
</html>
<?php
}
?>
