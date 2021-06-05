
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>BRIGHT LIFE</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="stylesheet" href="../bootstrap.css">
<style>

.container-fluid{
  border:3px solid green;
}
</style>
</head>
<body>
<div class="main">
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="#"><span><i class="fas fa-home"></i>Home</span></a></li>
          <li><a href="./add-job/index.php"><span><i class="fas fa-briefcase"></i>Post job</span></a></li>
		  
		  
		  
		  <?php
$host='localhost';
$user='root';
$pass='';
$dbname='brightlife';



$ids=$_GET['id'];
//echo "Your registration is: ".$regValue.".";



$con=mysqli_connect($host,$user,$pass,$dbname);


$selectquery = "select * from emp where email='$ids'";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
{
?>

                
                 
                <li> <?php echo '<a href="seeker_detail.php?id='. $res['id'] .'" >Seeker Details</a>';?></li>
			
  <?php
}
?>  
          <li class="active"><a href="../login.php"><span><i class="fas fa-sign-in-alt"></i>Logout</span></a></li>
        
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">BRIGHT<span>LIFE</span> <small>DREAMS COMES TRUE</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="940" height="310" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="clr"></div>
 
  <div class="container-fluid">
    <h2 class="mt-3 mb-3 text-center">Job Details</h2>
    <div class="row">
    <div class="col-md-10">
    <table class="table table-bordered table-responsive table-sm">
    <thead>
    <tr class="bg-secondary text-white">
            <th>ID</th>
            <th>Email</th>
            <th>Job_Title</th>
            <th>Job_Location</th>
            <th>Company_Name</th>
            <th>Education</th>
            <th>Employment_Type</th>
            <th>Experience</th>
            <th>Job_Function</th>
            <th>Salary</th>
            <th>Description</th>
            <th>Skills</th>

    	</tr>
        <?php
			include "config.php";
      $id = $_GET['id'];
      echo $id;
    
			$i = "select * from jobposttb where email='$id'";
			$h = mysqli_query($con,$i);
			while($tr=mysqli_fetch_array($h))
			{
		?>
     
            <tr>
          	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td><?php echo $tr[5]; ?></td>
            <td><?php echo $tr[6]; ?></td>
            <td><?php echo $tr[7]; ?></td>
            <td><?php echo $tr[8]; ?></td>
            <td><?php echo $tr[9]; ?></td>
            <td><?php echo $tr[10]; ?></td>
            <td><?php echo $tr[11]; ?></td>
          </tr>
        <?php
			}
		?>
		
    </table>
    </form>
    </div>
  </div>
  </div>
    <div class="clr"></div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
         <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
         <p class="contact_info"> <span>Address:</span> Lahartara Varanasi, India<br />
          <span>Mob No. :</span> 8417071715<br />
		  <span>E-mail:</span> <a href="#">pankajkeshari099@gmailcom</a><br>
		  <span>E-mail:</span> <a href="#">mauryapriya0018@gmail.com</a>
		  </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">BRIGHT LIFE</a></p>
      <p class="rf">Design by Pankaj & Priya</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
