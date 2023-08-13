<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
include "db.php";

$a=trim($_POST["email"]);
$b=trim($_POST["old_username"]);
$c=trim($_POST["new_username"]);
$res1=mysqli_query($conn,"select * from user where username='$b' and email='$a'");
  if($res1->num_rows==1)
{
$res=mysqli_query($conn,"UPDATE user SET username='$c' WHERE email='$a'");
  if($res)
{
	include "displayuser.php";
}
else
{
	echo "no such user";
}
}
else
{
	echo "<script type='text/javascript'>alert('no such user');</script>";
	include "username.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>