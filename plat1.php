<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{

include "db.php";

$a=trim($_POST["trainno"]);
$b=trim($_POST["arrivaltime"]);
$c=trim($_POST["old_platformno"]);
$d=trim($_POST["new_platformno"]);
$res=mysqli_query($conn,"UPDATE platform SET platformno='$d' WHERE trainno='$a'");
  if($res)
{
	include "displayplatform.php";
}
else
{
	echo "";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>