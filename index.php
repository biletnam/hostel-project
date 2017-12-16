<!doctype html>
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
    
    <li class="nav"><a class="nav" href="reg.php">Registration</a></li>
    <li class="nav"><a class="nav" href="fee.php">Fee Structure</a></li>
    <li style="float:right" class="nav"><a class="nav" href="about.php">About Us</a></li>
    <li style="float:right" class="nav"><a class="nav" href="contact.php">Contact</a></li>
</ul>
</div>
<!-------------------------------------------body------------------------------------------->

<div id="form">
    <form method="post" action="login_check.php">
    <center><h2>Login<br><br></h2>
    Username<br><br>
    <input type="text" name="sid" placeholder="Student No." ><br>
    Password<br><br>
    <input type="password" name="pass" placeholder="password"><br><br>
        <input type="submit" name="sub" class="button" value="Submit"><br><br>
        </center>
        <a href="forgot.php" id="forgot">Forgot your Password</a>
    </form>
    </div>
<div id="footer">
    Ajay Kumar Garg Engineering College, 27th Km Stone, Delhi - Hapur Bypass Road, Adhyatmik Nagar Ghaziabad - 201009
    </div>
</body>
</html>