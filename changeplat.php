<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
include "db.php";

$a=trim($_POST["arrivaltime"]);
$b=trim($_POST["new_platformno"]);
$z=trim($_POST["trainno"]);
$c="select * from platform where trainno='$z'";
$d=$conn->query($c);
if($d->num_rows==1)
{
$x="select * from platform where arrivaltime='$a' and platformno='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
		
	echo "<script type='text/javascript'>alert('platform is already assigned');</script>";
	include "plat.php";

}
else
{
	include "plat1.php";

}
}
else{
	echo "<script type='text/javascript'>alert('no such train has been entered');</script>";
	include "plat.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>