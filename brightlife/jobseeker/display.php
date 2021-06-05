
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    
    body{
        margin:0px;
        padding:0px;

       
    }
    .main1 a
    {
        text-align: center;
        padding: 5px;
       
    }
    .main{
        background-color:#f1f1f1;
        width:100%;
        height:650px;
    }
    .main1
    {
     position:absolute;
     top:5px;
     left: 10vh;
     border-radius: 15px 50px 15px 50px;
    background-color: #d22f2f;
    width:90%;
    height: auto;
     
     padding:15px;

    }
    td{
        padding:5px;
        position: relative;
        left:2px;
    }
    td a{
        margin:auto;
    }
    #a3
    {
        background-color: black;
        color:white;
        border:2px solid black;
    }
    #a4
    {
        border:2px solid black;
    }
    h1
    {
        text-align: center;
        margin-bottom: 25px;
        color:white;
    }
    #a{
        background-color: cyan;
    }
    th{
        position:relative;
        left:2px;
    }
    table{
        width:auto;
    }
    @media screen and (min-width:1951px)
    {
        .main1{
            width: 72%;
        }
    }
    @media screen and (max-width:1088px)
    {
        .main1 {
    position: absolute;
    top: 5px;
    left: 4vh;
    width: 112%;
    height: auto;
    padding: 15px;
    }
    .main {
    width: 109%;
    height: auto;
    }
    }
    </style>
</head>
<body>
<div class="main">
<div class="main1">
<h1>Job seekers details</h1>
<table border="2" style="text-align:center";>
    <tr id="a3">
    <th>  id  </th>
    <th>  first_name  </th>
    <th>  Last_name  </th>
    <th>  Email  </th>
    <th>  Username  </th>
    <th>  Password  </th>
    <th>  Contact  </th>
    <th>  Age </th>
    <th>  Gender  </th>
    <th>  Address  </th>
    <th  >Resume  </th>
    <th>  Experience  </th>
    <th colspan="2"> operation </th>
    </tr>
    <?php
$host='localhost';
$user='root';
$pass='';
$db='brightlife';
$con=mysqli_connect($host,$user,$pass,$db);

$selectquery = "select * from seeker ";

$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query))
{
?>
   
   <tr id="a4">
   <td id="a"> <?php echo $res['id'];  ?> </td>
    <td id="a"> <?php echo $res['fname']; ?> </td>
    
    <td id="a"> <?php echo $res['lname']; ?> </td>
    <td id="a"> <?php echo $res['email'];?> </td>
    <td id="a"> <?php echo $res['uname']; ?> </td>
    <td id="a"> <?php echo $res['pass']; ?> </td>
    <td id="a"> <?php echo $res['contact']; ?> </td>
    <td id="a"> <?php echo $res['age']; ?> </td>
    <td id="a"> <?php echo $res['gender']; ?> </td>
    <td id="a"> <?php echo $res['address']; ?> </td>
    <td id="a"> <img src="image/<?php echo $res['res'];?>" alt="img" width="100px" height="100px"> </td>
    <td id="a"> <?php echo $res['exp']; ?></td>
 <td id="a"><a href="update.php?id= <?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a></td>
    <td id="a"><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a></td>
    </tr>
<?php

}

?>
    
    </table>
    </div>
    </div>
</body>
</html>