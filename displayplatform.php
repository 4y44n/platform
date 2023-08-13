<html>
<head>
<link rel="stylesheet" href="./table.css">
<style>
body{
	background-image: url("./train11.jpg");
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

$sql = "SELECT * FROM platform";
$result = $conn->query($sql);
?>

<table>
  <tr>
    
    <th>trainno</th> 
	<th>trainname</th> 
	<th>arrivaltime</th> 
    <th>platformno</th>
	
  </tr>
  
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo '<td>' . $row['trainno'] . '</td>';
		echo '<td>' . $row['trainname'] . '</td>';
		echo '<td>' . $row['arrivaltime'] . '</td>';
		echo '<td>' . $row['platformno'] . '</td>';
		
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