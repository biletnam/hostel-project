<?php
require 'db_connect.php';
extract($_POST);
if(isset($_POST['sub']))
{
$qu="insert into users values('$sid','$name','$mob','$email','$pass')";
$result=mysqli_query($db,$qu);
header('location:index.php?status=success');
}
?>


<html>
<head>
<title>
Hostel Seat Booking 
</title>
<link rel="icon" href="img/AKGEC.png" type="image/png" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="js/validation.js"></script>
</head>
<body>
    <div id="header">
        
        <div class=head1><h1>Hostel Seat Booking</h1></div>
    </div>
<div class="nav">
<ul class="nav">
    
    <li class="nav"><a class="nav" href="index.php">Login</a></li>
    <li class="nav"><a class="nav" href="fee.php">Fee Structure</a></li>
    <li style="float:right" class="nav"><a class="nav" href="about.php">About Us</a></li>
    <li style="float:right" class="nav"><a class="nav" href="contact.php">Contact</a></li>
</ul>
</div>
<!-------------------------------------------body------------------------------------------->

<div id="form">
    <form name="reg" method="post" onsubmit="return validateform()" >
    <center><h2>Register<br><br></h2>
        
        Student ID *<br><br>
        <input type="text" name="sid" placeholder="Student ID" ><span id="sidvalid"></span><br>
        Name *<br><br>
    <input type="text" name="name" placeholder="Name" ><span id="namevalid"></span><br><br>
        Mobile No.* <br><br>
    <input type="text" name="mob" placeholder="Mobile No." ><span id="mobvalid"></span><br><br>
    Email ID *<br><br>
    <input type="text" name="email" placeholder="Email ID" ><span id="emailvalid"></span><br><br>
    Password *<br><br>
    <input type="password" name="pass" placeholder="Password"><span id="passvalid"></span><br><br>
        <input type="submit" name="sub" value="Submit"><span id="valid"></span>
        <br><br><br><br><br>
        </center>
    </form>
    </div>
    
    
    
    <div id="footer">
        
    </div>
</body>
</html>

