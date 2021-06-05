<?php
$host='localhost';
$user='root';
$pass='';
$dbname='brightlife';
$date=date("d M,Y"). "<br>";
session_start();

$regValue ;

//echo "Your registration is: ".$regValue.".";



$con=mysqli_connect($host,$user,$pass,$dbname);


$selectquery = "select * from jobposttb where id=20";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
{
?>

                
                 
                <div class="m3"> <?php echo '<a href="jobdes16.php?id='. $res['id'] .'" >View Job</a>';?>
				
			
              
       
      
        
  <?php
}
?>   