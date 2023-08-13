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
<body><font color="white"><h1>
<form action="changeplat.php" method="post">
trainno:<br>
<input type="text" name="trainno"><br>
arrivaltime:<br>
<input type="text" name="arrivaltime"><br>
old platformno:<br>
<input type="text" name="old_platformno"><br>
new platformno:<br>
<input type="text" name="new_platformno"><br>
<button type="submit" name="submit">change</button>
</form>
</body>
</html>