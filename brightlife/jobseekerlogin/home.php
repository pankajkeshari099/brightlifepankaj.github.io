<?php
include "config.php";

//Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
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
</head>
<body>
<div class="main">
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span><i class="fas fa-home"></i> Home</span></a></li>
          <li><a href="about.php"><span><i class="fas fa-address-card"></i>About Us</span></a></li>
          <li><a href="jobs.php"><span><i class="fas fa-briefcase"></i>jobs</span></a></li>
          <li><a href="contact.php"><span><i class="fas fa-phone"></i>Contact Us</span></a></li>
          <li class="active"><a href="http://localhost/brightlife/jobseekerlogin/seekerlogin.php"><span><i class="fas fa-sign-in-alt"></i>Logout</span></a></li>
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
          <h2><span>Excellent Solution</span> For Your CAREER</h2>
          
          
          <div class="img"><img src="images/img1.jpg" width="638" height="192" alt="" class="fl" /></div>
          <div class="post_content">
            <p>Job searching is easy with <b style="color:teal";>BRIGHT LIFE</b>, the most trusted network. Find jobs in India and around the world that are right for you, in any industry. Easily and instantly search and find your next job from millions of business opportunities.</p>
            <p><b style="color:teal";>BRIGHT LIFE </b>can help you to take the right steps to start finding career opportunities. Filter through millions of job openings instantly to find the right ones for you. Job alerts will notify you about the companies or positions you are interested in so you can be the first one to apply, directly through the online website.</p>
		    <p>Enrich your professional network to help you succeed in your job search by connecting with those you know or those in your industry. Job search, use the Resume Builder, find new business contacts & referrals or boost your brand or business. Easily apply for jobs with your resume or professional profile in just a few taps. <b style="color:teal";>BRIGHT LIFE </b>can help you change your career.</p>
           </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>We'll Make Sure Template</span> Works For You</h2>
          <p class="infopost">Posted on <span class="date">29 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com"><span>7</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="638" height="192" alt="" class="fl" /></div>
          <div class="post_content">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
            <p class="spec"><a href="#" class="rm">Read more</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span></span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>

        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
              Unlimited Amazing Stock Photos</li>
            <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="http://www.csshub.com/">CSS Hub</a><br />
              Premium CSS Templates</li>
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
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
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
