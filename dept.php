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
<form action="changedept.php" method="post">
trainno:<br>
<input type="text" name="trainno"><br>
old departure time:<br>
<input type="text" name="old_departuretime"><br>
new departure time:<br>
<input type="text" name="new_departuretime"><br>
<button type="submit" name="submit">change</button>
</form>
</body>
</html>