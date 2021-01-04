<html>

<head>
    <title>JSMpeg Stream Client</title>
    <style type="text/css">
        html,
        body {
            /* background-color: #111; */
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="node_modules/jquery-clipchamp-mjpeg-player-plugin/src/jquery.clipchamp.mjpeg.player.js"></script>

</head>

<body>
    <h1>Player</h1>
    <canvas id="mjpeg_player" style="width:640px; height: 480px;"></canvas>
    <script>
        $('#mjpeg_player').clipchamp_mjpeg_player(
            'http://1.20.235.84:38015/cgi-bin/video.cgi?userName=admin&password=admin&type=http&cameraID=1&mjpegplay=1',
            12, // frames per second
            true, // autoloop
            function(wrapperElement, playerInterface) {
                // call playerInterface.finish() to stop the playback video
            });
    </script>
</body>

</html>