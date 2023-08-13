<?php
include "db.php";
// define variables and set to empty values
$trainno= $trainname = $source = $destination = $arrivaltime = $departuretime= "";
if (isset($_POST['submit'])) {
  $trainno = test_input($_POST["trainno"]);
  $trainname = test_input($_POST["trainname"]);
  $source = test_input($_POST["source"]);
  $destination = test_input($_POST["destination"]);
  $arrivaltime = test_input($_POST["arrivaltime"]);
  $departuretime = test_input($_POST["departuretime"]);
  $res=mysqli_query($conn,"INSERT into trainform  values('$trainno','$trainname','$source','$destination','$arrivaltime','$departuretime')");
  if($res)
{
	include "displaytrain.php";
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