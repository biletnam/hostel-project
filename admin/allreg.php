<!doctype html>
<html>
<head>
<link href="bootstrap/css/bootstrap.css" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    <link href="bootstrap/js/bootstrap.js" type="text/script">
    <link href="bootstrap/js/bootstrap.min.js" type="text/script">
<title>
Hostel Seat Booking 
</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="header">
    <div class ="logo"><img src="img/AKGEC.png" height=100px></div>
    <div class="head1"><h1>Admin Panel</h1></div>
    </div>
<div class="content">
<div class="nav">
<ul class="nav">
    <li class="nav"><a class="nav" id="status" href="#">Status</a></li>
    <li class="nav"><a class="nav" id="reg" href="allreg.php">Registration</a></li>
    <li class="nav"><a class="nav" id="set" href="#">Hostel Setting</a></li>
    <li class="nav"><a class="nav" id="rooms" href="#">Rooms</a></li>
    <li class="nav"><a class="nav" href="#">Hostel Strength</a></li>
    <li class="nav"><a class="nav" href="#">Girls Hostel</a></li>
    <li class="nav"><a class="nav" href="#">Boys Hostel</a></li>
    <li class="nav"><a class="nav" href="#">Criteria</a></li>
    <li class="nav"><a class="nav" href="#">Empty Rooms</a></li>
    <li class="nav"><a class="nav" href="#">View Table</a></li>
    <li class="nav"><a class="nav" href="#">Add/Remove Student</a></li>
    <li class="nav"><a class="nav" href="#">Current Admins</a></li>
    <li class="nav"><a class="nav" href="#">Change Password</a></li>
    <li class="nav"><a class="nav" href="#">Logout</a></li>
</ul>
</div>
<div class=display>
    <!------------------------------------BODY content---------->
    

<?php
require 'db_connect.php';
    echo"<center><h3><b>List of Registered Students</b></h3></center>";

 echo"<table class='table table-bordered table-responsive'>";
    	echo "<tr>
        		<th>Student No.</th>
        		<th>Roll</th>
        		<th>Name</th>
                <th>Mob</th>
                <th>Father's Name</th>
                <th>Father's Mob.</th>
                <th>Email</th>
        	</tr>";
        
	$qu="select * from users";	
    $p=mysqli_query($db,$qu);
    while($row=mysqli_fetch_array($p))
    {
     echo"<tr>";
     	echo"<td>".  $row[0]."</td>";
        echo"<td>".  $row[1]."</td>";
        echo"<td>".  $row[2]."</td>";
        echo"<td>".  $row[3]."</td>";
        echo"<td>".  $row[4]."</td>";
        echo"<td>".  $row[5]."</td>";
        echo"<td>".  $row[6]."</td>";
     echo"</tr>";	
    }
    echo"</table>";
     
 ?>

</div>
</div>
</body>
</html>