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
    <th>id</th>
    <th>first_name</th>
    <th>Last_name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Contact</th>
    <th>Company</th>
    <th>Company_Address</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>
    <?php
    include"config.php";
    $selectquery = "select * from emp ";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
    {
    ?>
    <tbody>
    <tr>
    <td> <?php echo $res['id'];  ?> </td>
    <td> <?php echo $res['fname']; ?> </td>
    <td> <?php echo $res['lname']; ?> </td>
    <td> <?php echo $res['email'];?> </td>
    <td> <?php echo $res['uname']; ?> </td>
    <td> <?php echo $res['pass']; ?> </td>
    <td> <?php echo $res['contact']; ?> </td>
    <td> <?php echo $res['company']; ?> </td>
    <td> <?php echo $res['address']; ?> </td>
    <td><a href="update.php?id= <?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a></td>
    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a></td>
   
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