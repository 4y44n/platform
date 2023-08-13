<html>
<head>
<style>
body{
	background-image: url("./train15.jpg");
   height: 100%; 
    width: 100%
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<font color="white"><h1>
<form action="changearr.php" method="post">
trainno:<br>
<input type="text" name="trainno"><br>
old arrival time:<br>
<input type="text" name="old_arrivaltime"><br>
new arrival time:<br>
<input type="text" name="new_arrivaltime"><br>
<button type="submit" name="submit">change</button>
</form></h1></font>
</body>
</html>