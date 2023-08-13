<html>
<head>
<link rel="stylesheet" href="./table.css">
<style>
body{
	background-image: url("./train14.jpg");
   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table{
	 width: 50%;
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body bgcolor="black">
<?php
include "db.php";

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<table>
  <tr>
    
    <th>email</th> 
	<th>username</th> 
	<th>password</th> 
</tr>
  
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['username'] . '</td>';
		echo '<td>' . $row['password'] . '</td>';
		
     //   echo "<br> trainname: ". $row["trainname"]. " -trainno: ". $row["trainno"]. " -source: " . $row["source"] . " -destination: " . $row["destination"] . " -arrivaltime: " . $row["arrivaltime"] . " -departuretime :" . $row["departuretime"] . "<br>";
		echo '</tr>';
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</body>
</html>