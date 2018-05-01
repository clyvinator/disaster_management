<?php
      $location = $_POST['txtlocation'];
        $lat = $_POST['txtlat'];
        $lon = $_POST['txtlon'];
        $pincode = $_POST['txtpincode'];
      include("database.php");
      if(!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
        header('location:Adminlogin.php');
      }
      // $fetch_calamities_sql = "SELECT * from calamity where active=1";
      // $rs = mysql_query($fetch_calamities_sql);
      // while($row = mysql_fetch_array($rs)) {
      //   $type = $row['type'];
      //   $place = $row['place'];
      //   $id = $row['id'];
      //   echo "<script type = 'text/javascript'>alert('$type,$id');</script>";
      // }
?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disaster Mgmt.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="chat.js"></script>
<script src="script.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	 
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link href="../new/css/lightbox.css" rel="stylesheet">
  <link href="../new/css/main.css" rel="stylesheet">
  
  <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
  <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
	  
	  #upload{padding:14px 12px}
	  #uplimg{padding:14px 12px}

    .email-alert {
      color:blue; 
      font-size:15px; 
      font-weight:bold; 
      text-align:center
    }

     .sms-alert {
      background-color: #ffffff;
      color:blue; 
      font-size:15px; 
      font-weight:bold; 
      text-align:center
    }
    .sms-alert:active {
      background-color: #aaaaaa;
      color: red
    }

    .email-alert:active {
      background-color: #aaaaaa;
      color: red
    }
    </style>
  </head>
  <body class="hold-transition skin-yellow-light sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

	<?php include('header.php');?>
	<!-- =============================================== sidebar-->
	<?php include('sidebar.php'); ?>
	<div class="content-wrapper">
    <div class="pac-card" id="pac-card" style="margin:10px">
      <div>
        <div id="title">
          Autocomplete search
		<?php $g_lati = $_POST['lati']; ?>
		<?php $g_long = $_POST['loni']; ?>
		<?php $g_lci = $_POST['lci']; ?>
		<?php $g_lst = $_POST['lst']; ?>
		<?php $g_lco = $_POST['lco']; ?>
		<form method="post" name="latlong" style="display:unset;float:right">
		<textarea name="lati" id="latitude" hidden></textarea>
		<textarea name="loni" id="longitude" hidden></textarea>
		<textarea name="lci" id="city" hidden></textarea>
		<textarea name="lst" id="state" hidden></textarea>
		<textarea name="lco" id="country" hidden></textarea>
		<button type="submit" style="background-color:transparent;border:0px"><span class="fa fa-crosshairs"></span></button>
		</form>
        </div>
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all" checked="checked">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
		<?php if ($g_lci != "") { ?>
        <input id="pac-input" type="text" value="<?php print $g_lci; ?>, <?php print $g_lst; ?>, <?php print $g_lco; ?>" placeholder="Enter a location">
		<?php } else { ?>
        <input id="pac-input" type="text" placeholder="Enter a location">
		<?php } ?>
		<input type="submit" value="Select" style="font-size:14px;padding:1px 6px 0px" onclick="showInput();"><br/>
			<script language="JavaScript">
			function showInput() {
				document.getElementById('txtlocation').innerHTML = document.getElementById("pac-input").value;
			}
			</script>
		
      </div>
    </div>
    <div id="map"></div>
    
		
</div>
</div><!--body-->
	  </div></form>
</div>
  <?php include('footer.php'); ?>
</div>
<script src="../dist/js/demo.js"></script>
<script type="text/javascript" src="../new/js/lightbox.min.js"></script>
<script type="text/javascript" src="../new/js/main.js"></script>

	<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

	<script type="text/javascript">
		function showPosition(){{
			if(navigator.geolocation){
				navigator.geolocation.getCurrentPosition(function(position){
					var positionInfo = "{" + "lat: " + position.coords.latitude + ", " + "lng: " + position.coords.longitude + "}";
					document.getElementById("result").innerHTML = positionInfo;
				});
			} else{
				alert("Sorry, your browser does not support HTML5 geolocation.");
			}
		}
  }
	</script>
    <script>
        $.ajax({
            url: "https://geoip-db.com/jsonp",
            jsonpCallback: "callback",
            dataType: "jsonp",
            success: function( location ) {
                $('#country').html(location.country_name);
                $('#state').html(location.state);
                $('#city').html(location.city);
                $('#latitude').html(location.latitude);
                $('#longitude').html(location.longitude);
                $('#ip').html(location.IPv4);  
            }
        });     
    </script>
    <script>
      var map;
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 12.914, lng: 74.856},
          zoom: 10
        });
        // var mangalore = { lat: 12.914, lng: 74.856 };
        // addMarker(mangalore, map);
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        
        var infowindow = new google.maps.InfoWindow();




        var heat_wave_image = './heat_wave.png';
        var severe_heat_wave_image = './severe_heat_wave.png'
        var flood_image = './flood_icon.png'
        var uv_image = './uv_index.png'
        var mangalore = {lat: 12.914, lng: 74.856}




        // var beachMarker = new google.maps.Marker({
        //   position: mangalore,
        //   map: map,
        //   icon: {
        //     url: flood_image, // url
        //     scaledSize: new google.maps.Size(50, 50), // scaled size
        //   }
        // });
      

     
    var arr;
      $.ajax({
        url:"getCalamities.php",
        type:"GET",
        async: true,
        success:function(data){
          for(var i=0; i<data.length; i++) {
            var lat = parseFloat(data[i][3]);
            var lng = parseFloat(data[i][4]);
            var img;
              switch(data[i][1]) 
              {
                case "High uv index": 
                lat += 0.02;
                lng += 0.02;
                img = uv_image;
                break
                case "Severe heat wave": 
                lat += 0.02;
                lng -= 0.02;
                img = severe_heat_wave_image;
                break;
                case "Heat wave": 
                lat -= 0.02;
                lng += 0.02;
                img = heat_wave_image;
                break;
                case "Flood": 
                lat -= 0.02;
                lng -= 0.02;
                img = flood_image;
                break;
              }
            var marker = new google.maps.Marker({
              position: {lat: lat, lng: lng},
              map: map,
              icon: {
                url: img, // url
                scaledSize: new google.maps.Size(50, 50), // scaled size
              }
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                var content = "<center><h3>Disaster Alert</h3><h4>"+data[i][1]+"</center></h4><br/><input type='button' class='sms-alert' value='Send SMS Alert'/><input type='button' class='email-alert' value='Send Email Alert'/>";
                infowindow.setContent(content);
                infowindow.open(map, marker);
              }
            })(marker, i));
          }  
        },
        dataType:"json"
      });
      google.maps.event.addListener(map, 'click', function() {
        if(infowindow){
           infowindow.close();
        }
    });
    
        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          // marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          // marker.setPosition(place.geometry.location);
          // marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxdjIou0AhSuzAysEOsU_068zYrR2si1E&libraries=places&callback=initMap"
        async defer></script>


   


  </body>
</html>
<script type="text/javascript">

  $(function(){
  
  $(document).on('submit','#chatform',function(){
    var text= $.trim($("#text").val());
    var name= $.trim($("#name").val());
    if(text != "" && name != ""){
      $.post('chatposter.php',{text: text, name: name},function(data){
        $(".chatMessages").append(data);
      });
    }
    else{
      alert("Data Missing");
    }
  
  });
  
  function getMessages(){
    // $.ajax({
    //   type: "GET",
    //   dataType: "jsonp",
    //   async: false,
    //   jsonpCallback: 'jsonCallback',
    // contentType: "application/json",
    //   url: "http://localhost:5000/"
    // }).done(function( o ) {
    //    var json_o = $.parseJSON(o);
    //    alert(json_o);
    // });
  function getCalamities(){
    <?php
      include("database.php");
      $fetch_calamities_sql = "SELECT * from calamity where active=1";
      $rs = mysql_query($fetch_calamities_sql);
      while($row = mysql_fetch_array($rs)) {
        $type = $row['type'];
        $place = $row['place'];
        $id = $row['id'];
        echo "<script type = 'text/javascript'>alert('$type,$id');</script>";
      }
    ?>

  
</script>
