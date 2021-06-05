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
<style>
  .main1{
    background-color:#f1f1f194;
    width:700px;
    padding-top: 20px;
    padding-left: 20px;
  }
  .mainsub{
    background-color:whitesmoke;
    width:680px;
    height:120px;

  }
  .m1{
    background-color:#0080ff;
    width:100px;
    height: 85px;
    float:left;
    margin-top: 10px;
    margin-left: 10px;
    padding-top: 15px;
    
    
  }
  .m2{
    width:420px;
    height: 100px;
    float:left;
    margin-top: 10px;
    margin-left: 10px;
    text-align: left;

  }
  .m3{
    width:120px;
    height: 40px;
    float:left;
    margin-top: 70px;
    border-radius: 25px;
    border:1px solid blue;
    margin-left: 10px;
    text-align: center;
    line-height: 40px;
    }
    .m3 a{
      font-weight: bold;
      text-decoration: none;
      font-size: large;
      display:block;
    
     
    }
    .m3 a:hover{
      color:red;
    }
    .m2 a{
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
      color:black;
    }
    #s1
    {
      margin-left: 2.5px;
      margin-top:5px;
      color:gray;
      font-size:12px ;
    }
</style>
</head>
<body>
<div class="main">
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span><i class="fas fa-home"></i>Home</span></a></li>
          <li><a href="about.php"><span><i class="fas fa-address-card"></i>About Us</span></a></li>
          <li class="active"><a href="jobs.php"><span><i class="fas fa-briefcase"></i> jobs</span></a></li>
          <li><a href="contact.php"><span><i class="fas fa-phone"></i>Contact Us</span></a></li>
          <li><a href="login.php"><span><i class="fas fa-sign-in-alt"></i>Login</span></a></li>
          <li><a href="signup.php"><span><i class="fas fa-user-plus"></i>Sign-up</span></a></li>  
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
      
     

        <div class="main1">

        <?php
$host='localhost';
$user='root';
$pass='';
$dbname='brightlife';
$date=date("d M,Y"). "<br>";


$con=mysqli_connect($host,$user,$pass,$dbname);


$selectquery = "select * from jobposttb ";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
{
?>

              <div class="mainsub">
                <div class="m1">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-building fa-6x"></i></div>
                <div class="m2">
                  <div id="s1"><a href=""><?php echo $res['jtitle'];?></a></div>
                  <div id="s1"><?php echo $res['jlocation'];?></div>
                  
                  <div id="s1"><?php echo $date;?></div>
                  echo
                </div>
                <div class="m3"> <?php echo '<a href="jobdes.php?id='. $res['id'] .'" >View Job</a>';?></div>

              </div>
       
       <br>
        
  <?php
}
?>   
</div>   
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Job</span> Location</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Teacher</a></li>
            <li><a href="#">Developer</a></li>
            <li><a href="#">IT-Hardware</a></li>
            <li><a href="#">IT-Software</a></li>
            <li><a href="#">Engineer</a></li>
            <li><a href="#">Front End Developer</a></li>
            <li><a href="#">Back End Developer</a></li>
            <li><a href="#">web Templet</a></li>
            <li><a href="#">Web Templates</a></li>
            <li><a href="#">Web Templates</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
      
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
         <ul class="fbg_ul">
          <li><a href="#">100% satisfaction for your job</a></li>
          <li><a href="#">Provide a great opportunity for your career</a></li>
          <li><a href="#">24 X 7 available for your support</a></li>
        </ul>
      </div>
      <div class="col c3">
	  <h2><span>Contact</span> Us</h2>
        <p class="contact_info"> <span>Address:</span> Lahartara Varanasi, India<br />
          <span>Mob No. :</span> 8417071715<br />
		  <span>E-mail:</span> <a href="#">pankajkeshari099@gmail.com</a><br>
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