<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <h2 class="mt-3 mb-3 text-center">Job Seeker Details</h2>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-bordered table-hover table-responsive">
    <thead>
    <tr class="bg-secondary text-white">
    <th>Id</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Contact</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Resume</th>
    <th>Experience</th>
    <th colspan=2>Action</th>
    </tr>
    </thead>
    <?php
    include"config.php";
    $selectquery = "select * from seeker ";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
    {
    ?>
    <tbody>
    <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['fname']; ?></td>
    <td><?php echo $res['lname']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['uname']; ?></td>
    <td><?php echo $res['pass']; ?></td>
    <td><?php echo $res['contact']; ?></td>
    <td><?php echo $res['age']; ?></td>
    <td><?php echo $res['gender']; ?></td>
    <td><?php echo $res['address']; ?></td>
    <td id="a"> <img src="image/<?php echo $res['res'];?>" alt="img" width="100px" height="100px"> </td>
    <td><?php echo $res['exp']; ?></td>
    <td id="a"><a href="update.php?id= <?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a></td>
    <td id="a"><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a></td>
   
    </tr>
    </tbody>
    <?php
    }
    ?>
    
    </table>
         </div>
      </div>
</div>
</body>
</html>