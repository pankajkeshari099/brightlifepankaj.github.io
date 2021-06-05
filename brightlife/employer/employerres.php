<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='brightlife';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn){
  echo"connection successfull";

}
else{
  die("not connect:" . mysqli_connect_error());
}

if (isset($_POST['submit'])) 
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $user = $_POST['uname'];
  $pass = $_POST['pass'];
  $contact = $_POST['contact'];
  $company = $_POST['company'];
  $address = $_POST['address'];
  

 $sql="INSERT INTO emp( fname,lname,email,uname,pass,contact,company,address) VALUES ('$fname','$lname','$email','$user','$pass','$contact','$company','$address')";
$rest=mysqli_query($conn, $sql);
  if($rest) 
  { 
    ?>
    <script>
    alert("Registration Successfull");
    </script>
    <?php
  } 
  else 
  {
    die("not connect:" . mysqli_connect_error());
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
                <input type="text" name=" fname" placeholder="First Name" >
              </div>
            </div>
			
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" >
              </div>
            </div>
          </div>
		  
          <div class="input_field">
		  <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" >
          </div>
		  
		  <div class="input_field"> <span><i class="fas fa-users"></i></span>
            <input type="text" name="uname" placeholder="username" >
          </div>
		  
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="pass" placeholder="Password">
          </div>
		  
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="pass2" placeholder="Re-type Password" >
          </div>
         
		   <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i class="fas fa-phone"></i></span>
                <input type="text" name="contact" placeholder="Contact no.">
              </div>
			  
            </div>
            
          </div>
            	    	<div class="input_field"> <span><i class="fas fa-building"></i></span>
            <input type="text" name="company" placeholder="Company Name ">
          </div>
		  	<div class="input_field"> <span><i class="fas fa-address-card"></i></i></span>
            <input type="text" name="address" placeholder="Company address">
          </div>
		   
          <input class="button" type="submit" value="Register" name="submit">
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>