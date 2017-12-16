<?php
session_start();
?>



<html>
<head>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap/bootstrap/css/bootstrap.css" type="text/css">
    <link href="../bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    <script src="../bootstrap/js/bootstrap.min.js" ></script>
    <script src="../js/script.js" type="text/javascript"></script>
    
    
<title>
Hostel Seat Booking 
</title>
</head>
    
<body>
    <div id="header">                             <!--- Header --->
        <div id="logo"><a href="../index.php">Admin Panel</a></div>
        <div class="menu btn-group">
     <a href="../index.php" class="btn btn-info btn=lg">
         <span class="glyphicon glyphicon-home"></span></a>
        
    <button class="btn btn-info btn=lg" onclick="#">
        <span class="glyphicon glyphicon-user"></span></button> 
        
        <a href="../logout.php" class="btn btn-info btn=lg">
        <span class="glyphicon glyphicon-log-out"></span>
        </a>
        </div>
        
        </div>
    
    
    <div id="container">
      <div class="sidebar">
        <ul id="nav">                                 <!--- sidebar--->
              <li><a href="../index.php" >Dashboard</a></li>
            <li><a href="view.php" >View</a></li>
            <li><a href="maintain.php" >Maintain</a></li>
            <li><a href="payment.php" >Registration/ Verification</a></li>
            
            <li><a href="createhostel.php">Create Hostel</a></li>
            <li><a href="advanced.php">Advanced</a></li>
            <li><a href=#>Dashboard</a></li>
            
            
         
          
          </ul>
      </div>
      <div id="content">      <!---- page contents ------>
       
         <form action="" method="post">
<input type="text" name="search" placeholder="Enter student id">
<input type="submit" name="sub" value="Search">
</form>
          <?php
          require 'db_connect.php';
extract($_POST);
if(isset($sub)){
    $qu="select name from payment where sid= $search";
    $result=mysqli_query($db,$qu);
    $q= "DELETE FROM payment WHERE sid = $search";
    $res=mysqli_query($db,$q);
    while ($row = $result->fetch_assoc()) {
        echo "Following student entry has been deleted<br>";
        echo "Name : ";
    echo $row['name']."<br>";
}
    
}
?>
         
        </div>
    </div>
    </body>
</html>