
<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='brightlife';
$con=mysqli_connect($host,$user,$pass,$dbname);

$ids = $_GET['id'];
$showquery="select *from seeker where id=$ids";
$showdata = mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if (isset($_POST['upload'])) {
	


	$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
$folder = "image/".$filename;
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $uname=$_POST['uname'];
  $pass=$_POST['password'];
  $contact=$_POST['contact'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $exp=$_POST['exp'];

		//$sql = "INSERT INTO seeker (fname,lname,email,uname,pass,contact,age,gender,address,res,exp) VALUES ('$fname','$lname','$email','$uname','$pass',' $contact','$age','$gender','$address','$filename','$exp')";
	move_uploaded_file($tempname, $folder); 
    $idupdate = $_GET['id'];

  $sql="update seeker set id=$idupdate,fname='$fname',lname='$lname',email='$email',uname='$uname',pass='$pass',contact='$contact',age='$age',gender='$gender',address='$address',res='$filename',exp='$exp' where id= $idupdate";
  
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
      var firstpassword = document.f1.password.value;
      var secondpassword = document.f1.password2.value;

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
        <h2>JobSeeker Registration Form</h2>
      </div>
      <div class="row clearfix">
        <div class="">

          <form name="f1" action="" onsubmit="return matchpass()" method="post" enctype="multipart/form-data">
            <div class="row clearfix">

              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name=" fname" placeholder="First Name" value="<?php echo $arrdata['fname'];?>" required>
                </div>
              </div>

              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="lname" placeholder="Last Name" value=" <?php echo $arrdata['lname'];?>">
                </div>
              </div>
            </div>

            <div class="input_field">
              <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" value=" <?php echo $arrdata['email'];?>" required >
            </div>

            <div class="input_field"> <span><i class="fas fa-users"></i></span>
              <input type="text" name="uname" placeholder="Username" value="<?php echo $arrdata['uname'];?> " required>
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" value=" <?php echo $arrdata['pass'];?>" required>
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password2" placeholder="Re-type Password" value=" <?php echo $arrdata['pass']; ?>" required>
            </div>

            <div class="row clearfix">
              <div class="col_half">
                <div class="input_field"> <span><i class="fas fa-phone"></i></span>
                  <input type="text" name="contact" placeholder="Contact no." value=" <?php echo $arrdata['contact']; ?>" required>
                </div>

              </div>
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="age" placeholder="Age"value=" <?php echo $arrdata['age']; ?>" required>
                </div>
              </div>
            </div>

            <div class="input_field select_option">
              <select name="gender" value="<?php echo $arrdata['gender'];?>" required>
                <option>Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
              <div class="select_arrow"></div>
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="text" name="address" placeholder="address"value=" <?php echo $arrdata['address'];?>" required>
            </div>
            <span style="font-weight:bold" ;>Upload Your Resume</span>
            <div class="input_field">
              <input type="file" name="uploadfile" placeholder="Upload file" value="<?php echo $arrdata['res'];?>" required>
            </div>
            <div class="input_field select_option">
              <select name="exp" value="<?php echo $res['exp']; ?>"required>
                <option>Experience</option>
                <option>Fresher</option>
                <option>1-year</option>
                <option>2-year</option>
                <option>more than two year</option>
              </select>
              <div class="select_arrow"></div>
            </div>

            <input class="button" type="submit" value="Update" name="upload">
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>