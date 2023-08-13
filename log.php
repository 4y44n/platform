<?php
include "db.php";
// define variables and set to empty values
$email=$username=$password="";
if (isset($_POST['submit'])) {
	  $email = test_input($_POST["email"]);
	  $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
  $res=mysqli_query($conn,"INSERT into user  values('$email','$username','$password')");
  if($res)
  {
    echo "<script type='text/javascript'>alert('signed up successfully!!!');</script>";
	include "userlog.php";
   }
else{
	echo "please enter valid credentials";
	include "signup.php";
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
<html>
<head>
</head>
<body> 
<style>
body{
	background-image: url("./images/n.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>

