<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db.php";

$a=trim($_POST["username"]);
$b=trim($_POST["password"]);
$res1=mysqli_query($conn,"select * FROM user WHERE username='$a'");
  if($res1->num_rows==1)
{
$res=mysqli_query($conn,"DELETE FROM user WHERE username='$a'");
  if($res)
{
	include "displayuser.php";
}
else
{
	echo "";
}
}
else{
		echo "<script type='text/javascript'>alert('no such user');</script>";
	include "remove.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>