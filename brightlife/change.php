<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brightlife";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, fname, lname FROM seeker WHERE fname='anil'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $var=$row["id"];
  }
} else {
  
}
echo "results",$var;

mysqli_close($conn);
?>