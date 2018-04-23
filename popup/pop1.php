<!DOCTYPE html>
<html>
<head>
    <title></title>

   <link href="style.css" rel="stylesheet" >
    <script type="text/javascript" src="maintenance.html" ></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    <script type="text/javascript">
function div_show(str,e) {
document.getElementById('id').value=str;
document.getElementById('abc').style.display = "block";
}
function div_hide(){
document.getElementById('abc').style.display = "none";
}
    </script>
</head>
<body>
<form method="post">
<button type="button" name="p1" id="BILL" value="sub" onclick="div_show(this.name,this.id)"><img src="002.jpg"></button>
</form>
<form method="post">
<button type="button" name="p2" value="sub" onclick="div_show(this.name)"></button>
</form>
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Contact Us</h2>
<hr>
<input id="id" name="id" type="text">
<input id="name" name="name" placeholder="Name" type="text">
<input id="email" name="email" placeholder="Email" type="text">
<textarea id="msg" name="message" placeholder="Message"></textarea>
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
</body>
</html>