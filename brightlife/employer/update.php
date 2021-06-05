
<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='brightlife';
$con=mysqli_connect($host,$user,$pass,$dbname);

$ids = $_GET['id'];
$showquery="select *from emp where id=$ids";
$showdata = mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if (isset($_POST['submit'])) {
	
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $contact=$_POST['contact'];
  $company=$_POST['company'];
  $address=$_POST['address'];

	$idupdate = $_GET['id'];

  $sql="update emp set id=$idupdate,fname='$fname',lname='$lname',email='$email',uname='$uname',pass='$pass',contact='$contact',company='$company',address='$address'where id= $idupdate";
  
    if(mysqli_query($con, $sql))
  {
   ?>
   <script>
   alert("Registration Successfull");
   </script>
   <?php
  }
 else{
   die('not inserted:' .mysqli_connect_errno());
 }
}
?>

<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="style.css" type="text/css" />
 <script type="text/javascript">
    function matchpass() {
      var firstpassword = document.f1.pass.value;
      var secondpassword = document.f1.pass2.value;

      if (firstpassword == secondpassword) {
        return true;
      } else {
        alert("password must be same!");
        return false;
      }
    }
  </script>
</head>
<body>
  
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Employer Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        
        <form name="f1" action="" method="post" onsubmit="return matchpass()" method="post" enctype="multipart/form-data">
		 <div class="row clearfix">
		 
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name=" fname" placeholder="First Name" value="<?php echo $arrdata['fname'];?>" required>
              </div>
            </div>
			
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo $arrdata['lname'];?>">
              </div>
            </div>
          </div>
		  
          <div class="input_field">
		  <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" value="<?php echo $arrdata['email'];?>" required>
          </div>
		  
		  <div class="input_field"> <span><i class="fas fa-users"></i></span>
            <input type="text" name="uname" placeholder="username" value="<?php echo $arrdata['uname'];?>" required>
          </div>
		  
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="pass" placeholder="Password" value="<?php echo $arrdata['pass'];?>" required>
          </div>
		  
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="pass2" placeholder="Re-type Password" value="<?php echo $arrdata['pass'];?>" required>
          </div>
         
		   <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i class="fas fa-phone"></i></span>
                <input type="text" name="contact" placeholder="Contact no." value="<?php echo $arrdata['contact'];?>" required>
              </div>
			  
            </div>
            
          </div>
            	    	<div class="input_field"> <span><i class="fas fa-building"></i></span>
            <input type="text" name="company" placeholder="Company Name" value="<?php echo $arrdata['company'];?>" required>
          </div>
		  	<div class="input_field"> <span><i class="fas fa-address-card"></i></i></span>
            <input type="text" name="address" placeholder="Company address" value="<?php echo $arrdata['address'];?>"required>
          </div>
		   
          <input class="button" type="submit" value="Update" name="submit">
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>