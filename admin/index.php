<?php
session_start();
if(!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit;
}
require 'db_connect.php';

$qu="select * from users";
$totalreg = mysqli_query($db,$qu);
$row = mysqli_num_rows($totalreg);
$pay=mysqli_query($db,"select * from payment");
$row2=mysqli_num_rows($pay);
$bh1b=mysqli_query($db,"select * from bh1b where sid1 is null");
$row3=mysqli_num_rows($bh1b);
$bh1a=mysqli_query($db,"select * from bh1a where sid1 is null and sid2 is null and sid3 is null");
$row4=mysqli_num_rows($bh1a);
$bh2=mysqli_query($db,"select * from bh2 where sid1 is null and sid2 is null and sid3 is null");
$row5=mysqli_num_rows($bh2);
$bh3=mysqli_query($db,"select * from bh3 where sid1 is null and sid2 is null and sid3 is null");
$row6=mysqli_num_rows($bh3);
$gh1=mysqli_query($db,"select * from gh1 where sid1 is null and sid2 is null and sid3 is null");
$row7=mysqli_num_rows($gh1);
$gh2=mysqli_query($db,"select * from gh2 where sid1 is null and sid2 is null and sid3 is null");
$row8=mysqli_num_rows($gh2);
$gh3=mysqli_query($db,"select * from gh3 where sid1 is null and sid2 is null and sid3 is null");
$row9=mysqli_num_rows($gh3);
?>

<html>
<head>
    <link href="bootstrap/jqueryui/jquery-ui.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/jqueryui/jquery-ui.min.js" type="text/javascript"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.css" type="text/css">
    <link href="bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    <script src="bootstrap/js/bootstrap.min.js" ></script>
    <script src="js/script.js"></script>
    
    
<title>
Hostel Seat Booking 
</title>
</head>
    
<body>
    <div id="header">                             <!--- Header --->
        <div id="logo"><a href="index.php">Admin Panel</a></div>
        <div class="menu btn-group">
     <a href="index.php" class="btn btn-info btn=lg">
         <span class="glyphicon glyphicon-home"></span></a>
        
    <button class="btn btn-info btn=lg" onclick="#">
        <span class="glyphicon glyphicon-user"></span></button> 
        
        <a href="logout.php" class="btn btn-info btn=lg">
        <span class="glyphicon glyphicon-log-out"></span>
        </a>
        </div>
        
        </div>
    

    
   <div id="container">
      <div class="sidebar">
        <ul id="nav">                                 <!--- sidebar--->
        
            <li><a href="index.php" >Dashboard</a></li>
            <li><a href="menu/view.php" >View</a></li>
            <li><a href="menu/maintain.php" >Maintain</a></li>
            <li><a href="menu/payment.php" >Registration/ Verification</a></li>
            <li><a href="menu/faculty.php">Faculty section</a></li>
            <li><a href="menu/createhostel.php">Create Hostel</a></li>
            <li><a href="menu/advanced.php">Advanced</a></li>
            

         
          
          </ul>
      </div>
      <div id="content">                                <!---- page contents ------>
       
      <div class="block" id="draggable">
          <?php echo "Total Registered Students on this portal<br><hr>$row";
           ?>
      </div>
          <div class="block" id="draggable2">
          <?php echo "Total Students applied for hostel<br><hr>$row2";
           ?>
      </div>
          <div class="block" id="draggable3">
          <?php echo "Empty Rooms in boys hostel 1 - BH1(Single seater)<br><hr>$row3";
           ?>
      </div>
          <div class="block" id="draggable4">
          <?php echo "Empty Rooms in BH1 (Triple Seater)<br><hr>$row4";
           ?>
      </div>
          <div class="block" id="draggable5">
          <?php echo "Empty Rooms in boys hostel 2 (Triple Seater)<br><hr>$row5";
           ?>
      </div>
          <div class="block" id="draggable6">
          <?php echo "Empty Rooms in BH3 (Triple Seater)<br><hr>$row6";
           ?>
      </div>
          <div class="block" id="draggable7">
          <?php echo "Empty Rooms in Girls hostel 1<br><hr>$row7";
           ?>
      </div>
          <div class="block" id="draggable8">
          <?php echo "Empty Rooms in Girls hostel 2<br><hr>$row8";
           ?>
      </div>
          <div class="block" id="draggable9">
          <?php echo "Empty Rooms in Girls hostel 3<br><hr>$row9";
           ?>
      </div>
       
       </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>
</html>