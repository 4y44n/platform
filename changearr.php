<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db.php";

$a=trim($_POST["trainno"]);
$b=trim($_POST["old_arrivaltime"]);
$c=trim($_POST["new_arrivaltime"]);
$res1=mysqli_query($conn,"select * from trainform where arrivaltime='$b' and trainno='$a'");
if($res1->num_rows==1)
{
$res=mysqli_query($conn,"UPDATE trainform SET arrivaltime='$c' WHERE trainno='$a'");
$rec=mysqli_query($conn,"UPDATE platform SET arrivaltime='$c' WHERE trainno='$a'");
  if($res)
{
	if($rec)
	{
	include "displaytrain.php";
}
}
else
{
	echo "no such train has been entered";
}
}
else{
	echo "<script type='text/javascript'>alert('no such train has been entered');</script>";
	include "arr.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>