
<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='brightlife';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn)
{?>
<script>
  alert("connection successfull");
</script>
<?php
}
else
{
 ?>
  <script>
alert("connection not successfull");
</script>
<?php
}

if (isset($_POST['submit'])) 
{
  $uid=$_POST['uid'];
  $jid=$_POST['jid'];
  
	
  $sql="INSERT INTO final(uid,jid) 
  VALUES ('$uid','$jid')";
  $rest=mysqli_query($conn,$sql);
  if($rest)
  {
    echo"data inserted";
  } 
  else{
    die('not connect:'.mysqli_error());
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>successfully apply for this job</h1>


</body>
</html>