<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stream</title>
</head>
<body>

<div id="player"></div>

<script src="jwplayer/jwplayer.js"></script>
<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
<script type="text/javascript">

    var playerInstance = jwplayer("player");



    playerInstance.setup({
        autostart: true,
        playlist: [{
            image: "{{-- asset('images/live_bg.png') --}}",
            sources: [{
                file: "http://212.112.97.18/live/7001.flv"
            }]
        }],
        width: "640",
        height: "360",
        aspectratio: "",
        primary: "flash",
        skin: {
            name: "glow"
        },
        stretching: "exactfit"
    });
</script>

</body>
</html>