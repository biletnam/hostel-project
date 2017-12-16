<?php
    $GLOBALS['admin_atten']='0';
    $GLOBALS['admin_percent']='0';?>

<html>
<head>
    <script src="../css/spop.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <link href="../css/spop.min.css" rel="stylesheet" type="text/css">
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
          <div class="alert alert-info alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Info!</strong> Here you can select how students will be alloted in hostels.
</div>
          <a href="#content1"><div class="block" id="show1"> Criteria Setting<hr>Criteria that should be fulfilled for hostel</div></a>
          <a href="#content2"><div class="block" id="show2"> Fee Structure Setting<hr>Hostel Fees of various Hostels</div></a>
          <div id="content1">
          <form method="post">
            <fieldset>
            <legend>Leave fields empty if no criteria</legend>
          <input type="text" placeholder="Minimum Attendance Criteria" name="atten"/><br><br>
          <input type="text" placeholder="Minimum Percentage Criteria" name="percent"/><br><br>
          <input type="submit" name="subcrit">
          </fieldset>    
          </form><br>
              <?php echo "Current Attendance criteria:'".$GLOBALS['admin_atten']."'<br>";
                    echo "Current Percentage criteria:'".$GLOBALS['admin_percent']."'";?><br>
            
          </div>
          <div id="content2">
              <form method="post">
            <fieldset>
            <legend>Enter hostel fees for n seater rooms</legend>
          <input type="text" placeholder="Single seater" /><br><br>
          <input type="text" placeholder="Double seater" /><br><br>
          <input type="text" placeholder="Triple seater" /><br><br>
          <input type="submit" name="subfees">
          </fieldset>    
          </form>
          
          </div>
        </div>
    </div>
    
    <?php
    if(isset($_POST['subcrit']))
    {
        $GLOBALS['admin_atten']=$_POST['atten'];
        $GLOBALS['admin_percent']=$_POST['percent'];
    echo "<script type='text/javascript'> 
    spop({
	template: 'Success! New Value set',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'success',
	autoclose: 2000
        });
   </script>";
}

    ?>
    </body>
</html>