<html>
<head>
</head>
<?php
if(isset($_POST['submit']))
{
include "db.php";

$a=trim($_POST["arrivaltime"]);
$b=trim($_POST["platformno"]);
$c=trim($_POST["trainno"]);
$res="select * from trainform where trainno='$c'";
$res1=$conn->query($res);
if($res1->num_rows==1)
{
	
$x="select * from platform where arrivaltime='$a' and platformno='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
		
	echo "<script type='text/javascript'>alert('platform is already assigned');</script>";
	include "assignment.php";

}
else
{
	include "assign.php";

}

}
else{
	echo "<script type='text/javascript'>alert('no such train has been entered');</script>";
	include "assignment.php";
}
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>