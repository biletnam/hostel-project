<!doctype html>
<html>
<head>
<title>
Hostel Seat Booking 
</title>
<link rel="icon" href="img/AKGEC.png" type="image/png" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css">
<script>
    function response() {
    alert("Password has been mailed to your registered email id");
    }
    </script>
</head>
<body>
    <div id="header">
        
        <div class=head1><h1>Hostel Seat Booking</h1></div>
    </div>
<div class="nav">
<ul class="nav">
    
    <li class="nav"><a class="nav" href="reg.php">Registration</a></li>
    <li class="nav"><a class="nav" href="#">Fee Structure</a></li>
    <li style="float:right" class="nav"><a class="nav" href="#">About Us</a></li>
    <li style="float:right" class="nav"><a class="nav" href="#">Contact</a></li>
</ul>
</div>
<!-------------------------------------------body------------------------------------------->
<div id="form">
    
    <br>
    <form method="post">
       
        <center> Enter your Student id:
    <input type="text"><br><br>
        <input type="submit" name="sub" onclick="return response()"></center><br><br>
    </form>
    
    </div>
    <div id="response"></div>

<div id="footer">
    Ajay Kumar Garg Engineering College, 27th Km Stone, Delhi - Hapur Bypass Road, Adhyatmik Nagar Ghaziabad - 201009
    </div>
</body>
</html>