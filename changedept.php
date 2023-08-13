<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
session_start();
include "db.php";

$a=trim($_POST["trainno"]);
$b=trim($_POST["old_departuretime"]);
$c=trim($_POST["new_departuretime"]);
$res1=mysqli_query($conn,"select * from trainform where departuretime='$b' and trainno='$a'");
if($res1->num_rows==1)
{
$res=mysqli_query($conn,"UPDATE trainform SET departuretime='$c' WHERE trainno='$a'");
  if($res)
{
	include "displaytrain.php";
}
else
{
	echo "no such train has been entered";
}
}
else{
	echo "<script type='text/javascript'>alert('no such train');</script>";
	include "dept.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>