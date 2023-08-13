<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db.php";

$a=trim($_POST["name"]);
$b=trim($_POST["complaint"]);
$res=mysqli_query($conn,"INSERT INTO feedback VALUES ('$a','$b')");
if($res)
{
	echo "<script type='text/javascript'>alert('thanks for your valuable feedback');</script>";
	include "usermenu.php";
}
else
{
	echo "";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>