<?php
include "db.php";
// define variables and set to empty values
$platformno = $name = $quantity = "";

if (isset($_POST['submit'])) {
  $platformno = test_input($_POST["platformno"]);
  $name = test_input($_POST["name"]);
  $quantity = test_input($_POST["quantity"]);
  $query = "SELECT * FROM cost WHERE quantity ='$quantity'";  
                $result12= mysqli_query($conn, $query);  
                if(mysqli_num_rows($result12) == 1)  
                {  
  $res=mysqli_query($conn,"INSERT into buy value('$platformno','$name','$quantity')");
  echo mysqli_error($conn);
  if($res)
  {
   $query = "SELECT * FROM cost WHERE quantity ='$quantity'";  
                $result1 = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result1) == 1)  
                {  
                     while($row = mysqli_fetch_array($result1))  
                     {  
                      ?><h1><?php echo "you have to pay";?></h1>
                      <h1><?php echo $row["price"];?></h1><?php
					  
                      }
  }
  }
 else
{
	echo "sorry you cannot buy more than 4 tickets";
}
}
else{
			echo "<script type='text/javascript'>alert('sorry you cannot buy more than four tickets');</script>";
	include "buy.php";
}
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
<body bgcolor="blue"> 
<style>
body{
	background-image: url("./bg.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>
