<html>
<head>
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
body{
	background-image: url("./train11.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>

<body style="font:bold">
<div class="container" style="text-align:center">
<a class="button" href="arr.php">change arrival time</a>
</div>
<div class="container" style="text-align:center">
<a class="button" href="dept.php">change departure time</a><br>
</div>
<div class="container" style="text-align:center">
<a class="button" href="plat.php">change platform</a><br>
</div>
</body>
</html>
