<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR.js with A-Frame (Simulated GPS)</title>
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
  </head>
  <body>
    <a-scene embedded arjs='sourceType: webcam;'>
      <!-- カメラの設定 (位置情報をシミュレーション) -->
      <a-camera gps-camera 
        simulateLatitude="35.0" 
        simulateLongitude="139.50" 
        rotation-reader>
      </a-camera>

      <!-- 初期のボックスオブジェクト -->
      <a-box
        material="color: yellow"
        gps-entity-place="latitude: 35.0; longitude: 139.50"
        position="50 40 0">
      </a-box>
    </a-scene>

    <script>
      // DOMが読み込まれた後にボックスを追加する
      document.addEventListener('DOMContentLoaded', e => {
        const ele = document.createElement('a-box');
        ele.setAttribute('material', 'color: blue');
        ele.setAttribute('gps-entity-place', 'latitude: 35.0; longitude: 139.0');
        ele.setAttribute('position', '50 42 0');
        document.querySelector('a-scene').appendChild(ele);
      });
    </script>
  </body>
</html>

