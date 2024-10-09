<!DOCTYPE html>
<html>
<head>
<title>AR.js A-Frame Location-based</title>
<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
<script type='text/javascript' src='https://raw.githack.com/AR-js-org/AR.js/master/three.js/build/ar-threex-location-only.js'></script>
<script type='text/javascript' src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js'></script>
</head>
<body>
<a-scene vr-mode-ui='enabled: false' arjs='sourceType: webcam; videoTexture: true; debugUIEnabled: false' renderer='antialias: true; alpha: true'>
    <a-camera gps-new-camera='gpsMinDistance: 5'></a-camera>
    <a-entity material='color: red' geometry='primitive: box' gps-new-entity-place="latitude: <35.65610>; longitude: <139.54408>" scale="1000 1000 1000"></a-entity>
</a-scene>
</body>
</html>