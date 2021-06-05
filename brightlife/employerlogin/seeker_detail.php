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
			include "config.php";
            $ids=$_GET['id'];
            echo $ids;
			$i = "SELECT seeker.id,seeker.fname, seeker.lname, seeker.email,seeker.uname,seeker.pass,seeker.contact, seeker.age,seeker.gender, seeker.address,seeker.res ,seeker.exp FROM seeker INNER JOIN final ON seeker.id=final.uid";
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
            <td id="a"> <img src="image/<?php echo $tr['res'];?>" alt="img" width="100px" height="100px"> </td>
            <td><?php echo $tr[11]; ?></td>
            <td id="a"><a href="update.php?id= <?php echo $tr['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a></td>
    <td id="a"><a href="delete.php?id=<?php echo $tr['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a></td>
   
           
        </tr>
       
        <?php
			}
		?>
        </form>
		
    </table>
    </div>
    </div>
</div>
</body>
</html>