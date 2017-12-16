<?php
require 'db_connect.php';
?>
<html>
<head>
    
    <script src="../bootstrap/js/jquery.min.js"></script>
    <link href="../bootstrap/jqueryui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    <script src="../bootstrap/js/bootstrap.min.js" ></script>
    <script src="../bootstrap/jqueryui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../js/script.js" type="text/javascript"></script>
     
<title>
Hostel Seat Booking 
</title>
</head>
    
<body onload="loader()">
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
            
            
            

         
          
          </ul>
      </div><!---- page contents ------>
        <center><div id="loader"></div></center>
   <div id="content">
      <div id="cont">
       <div id="detail">
           <h3 id="detailh3">Click on tabs to view details</h3>
           <ul>
           <li><a href="#bh1a">bh1a</a></li>
           <li><a href="#bh1b">bh1b</a></li>
           <li><a href="#bh2">bh2</a></li>
           <li><a href="#bh3">bh3</a></li>
           <li><a href="#gh1">gh1</a></li>
           <li><a href="#gh2">gh2</a></li>
           <li><a href="#gh3">gh3</a></li>
           </ul><br>      
  <div id="bh1a">
      <p><?php $tablename='bh1a'; include 'sql_script.php'; ?></p>
  </div>
           <div id="bh1b">
      
<?php
require 'db_connect.php';
$qu="select * from bh1b";
$res=mysqli_query($db, $qu);
if (!$res) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}?>
<table class="table-bordered table-hover">
    <thead>
    <tr>
        <th>Sno.</th><th>sid1</th><th>roomno</th></tr></thead>
    <tbody>
    <?php 
        while($row=mysqli_fetch_array($res))
{   ?>
        <tr><td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
    </tr>
        <?php };?>
    </tbody>
</table>
  </div>
           
  <div id="bh2">
    <p>
    <?php $tablename='bh2'; include 'sql_script.php'; ?>
      </p>
  </div>
  <div id="bh3">
    <p><?php $tablename='bh3'; include 'sql_script.php'; ?></p>
   </div>
   <div id="gh1">
    <p><?php $tablename='gh1'; include 'sql_script.php'; ?></p>
  </div>
  <div id="gh2">
    <p><?php $tablename='gh2'; include 'sql_script.php'; ?></p>
  </div>
  <div id="gh3">
    <p><?php $tablename='gh3'; include 'sql_script.php'; ?></p>
   </div>
          </div>
        </div>
        </div>
    </div>
    </body>
</html>