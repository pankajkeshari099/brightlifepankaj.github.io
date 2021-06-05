<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $password = mysqli_real_escape_string($con,$_POST['password']);


    if ($id != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from emp where email='".$id."' and pass='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $id;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.btn101
{
width:50em;
height:100px;
text-align:center;
line-height:50px;
float:left;
margin-top: 5px;
text-align: center;
}

.btn301
{
width:550px;
height:350px;
background:linear-gradient(135deg,#35985B,pink);
margin-top: 70px;
margin-left: 25px;
padding-top: 10px;
border-radius: 15px;
box-shadow: 10px 10px #f3bbbb;
}
.lnk1
{
text-decoration:none;
color:black;
font-weight:bold;
font-size:25px;
margin-right: 10px;
border:1px solid black;
border-radius: 15px;
padding-right: 30px;
background: linear-gradient(135deg,#1EBE34,#FEDFBC);
}
.lnk3
{
  width:100px;
  height:50px;
}
.mainbtn
{
width: 600px;
height:460px;
background-color: white;
position:relative;
right:116px;
background:linear-gradient(135deg,#35989B,#BF56CA);
border-radius: 15px;
border:3px solid black;
box-shadow: 10px 10px red;
}
#a5
{
  color:black;
 font-size: large;
 font-weight: bold;
 text-decoration: none;
 text-align: center;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-weight: bold;
}
 h3
{
  text-align: center;
  font-weight: bold;
}
.mainbtn input{
  font-size: 16px;
  padding:15px 10px;
  width:518px;
  margin-top: 30px;
  margin-left: 15px;
  border-radius: 15px;
}
.btn301 a h3
{
  color:red;
  font-size: 20px;
  font-weight: bold;
}
.btn401 input
{
  width: 26em;
background:linear-gradient(135deg,#9C1EBE,#5BD885);
font-size:20px;
cursor: pointer;
}
.btn401 input:hover
{
color:lightgreen;
}
</style>
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
</head>
<body>
<div class="main">
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="../index.php"><span><i class="fas fa-home"></i>Home</span></a></li>
          <li><a href="../about.php"><span><i class="fas fa-address-card"></i>About Us</span></a></li>
          <li><a href="../jobs.php"><span><i class="fas fa-briefcase"></i>jobs</span></a></li>
          <li><a href="../contact.php"><span><i class="fas fa-phone"></i>Contact Us</span></a></li>
          <li class="active"><a href="../login.php"><span><i class="fas fa-sign-in-alt"></i>Login</span></a></li>
          <li><a href="../signup.php"><span><i class="fas fa-user-plus"></i>Sign-up</span></a></li>  
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
		        <div class="clr"></div><br>
       <form action="home.php" method="GET">
	 <div class="mainbtn">
	 <div class="btn101"><a href="#" class="lnk1">&nbsp&nbsp&nbsp Employer Login</a></div>
   <div class="btn301"><a href="#"><h3> Log in with Email ID</h3></a>
   <input type="text" name="id"placeholder="Enter Email ID" required><br>
   <input type="text" name="password"placeholder="Enter Password" required><br>
    <div class="btn401"><input type="submit" value="LogIn" name="but_submit"></div>
  </div>
  </div>
       </form>
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
