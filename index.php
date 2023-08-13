<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a{
 text-decoration:none;
 color:#cc0000;
}
a.button,div.container{
 //float:left;
}
a.button{
 background-color:#cc0000;
 border:1px solid #660000;
 border-radius:5px;
 color:#fff;
 margin-right:10px;
 position:relative;
 
 padding:10px 10px 10px 10px;
}
div.container{
 width:100%;
 padding:25px 25px 25px 25px;
 clear:both;
}
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
</style>
</head>

<body style="font:bold">
<video autoplay muted loop id="myVideo">
  <source src="train1.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>



<div class="container" style="text-align:center">
<a class="button" href="logorsign.php">USER</a>
</div>
<div class="container" style="text-align:center">
<a class="button" href="adminlog.php">ADMIN</a><br>
</div>
<div class="container" style="text-align:center">
<a class="button" href="stationmasterlog.php">STATION MASTER</a><br>
</div>
</body>
</html>
