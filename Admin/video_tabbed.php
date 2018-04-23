    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="demo.css">
	<?php echo'
    <div class="media-wrapper col-sm-12">
        <video id="player1" width="100%" height="421" controls preload="none">
            <source src="../Admin/'.$br['video'].'" type="video/mp4">
        </video><br><br>
    </div>
	';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
<script src="../dist/markers/markers.js"></script>
<script>
	var mediaElements = document.querySelectorAll('video, audio');

	for (var i = 0, total = mediaElements.length; i < total; i++) {
		new MediaElementPlayer(mediaElements[i], {
			markers: <?php echo'['.$br['time1'].', '.$br['time2'].', '.$br['time3'].']';?>,
            markerColor: '#00FF00',
            markerWidth: 3,
            markerCallback: function (media, time) {
            	alert('You reached ' + Math.round(time) + ' seconds');
            },
			features: ['playpause', 'current', 'progress', 'duration', 'volume', 'fullscreen', 'markers'],
		});
	}
</script>