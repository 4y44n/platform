<?php
include "db.php";
// define variables and set to empty values
$trainno = $trainname = $arrivaltime = $platformno = "";
if (isset($_POST['submit'])) {
  $trainno = test_input($_POST["trainno"]);
  $trainname = test_input($_POST["trainname"]);
  $arrivaltime = test_input($_POST["arrivaltime"]);
  $platformno = test_input($_POST["platformno"]);
  $res=mysqli_query($conn,"INSERT into platform values('$trainno','$trainname','$arrivaltime','$platformno')");
  if($res)
{
	include "displayplatform.php";
}
  }
else
{
	echo "";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>