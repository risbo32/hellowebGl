<html>
<head>
<title>Webgl</title>
<meta charset="utf-8" />
<style>
body{
    background:#222; color:#eee; font-family:arial;
}
canvas {
    margin:45px;
    background:#eee;
    width:640px;
    height:480px;
}
</style>
</head>


<body>

<canvas id="moncanvas"></canvas>
<span id="slideval"> </span>
<input  type="range"  max=100  min=0 step= 2  id="slider"/>
<script type="text/javascript" src="gl-matrix.js"></script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>