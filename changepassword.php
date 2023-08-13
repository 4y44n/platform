<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db.php";

$a=trim($_POST["username"]);
$b=trim($_POST["old_password"]);
$c=trim($_POST["new_password"]);
$res1=mysqli_query($conn,"select * from user where username='$a'");
  if($res1->num_rows==1)
{
$res=mysqli_query($conn,"UPDATE user SET password='$c' WHERE username='$a'");
  if($res)
{
	include "displayuser.php";
}
else
{
	echo "no such user";
}
}
else{
	echo "<script type='text/javascript'>alert('no such user has been entered');</script>";
	include "password.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>