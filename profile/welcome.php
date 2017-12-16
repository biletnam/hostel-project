<?php
session_start();
require 'db_connect.php';

$qu="select name from users where sid= $_SESSION[sid] ";
$result=mysqli_query($db,$qu);
while($uname = $result->fetch_assoc())
{
    $user= $uname['name'];
}
$_SESSION['uname']=$user;


$w3="select * from payment where sid= $_SESSION[sid]";
$rw3=mysqli_query($db,$w3);
$rows= mysqli_num_rows($rw3);

$roomdone=mysqli_query($db,"select * from queue where sid=$_SESSION[sid] and roomdone='1'");

$q=mysqli_query($db,"select * from payment where sid= $_SESSION[sid] and confirmed='1'");

   if(mysqli_num_rows($roomdone)==1)
   {
       $_SESSION['stat']="<h3 id='stat'>Hostel has been alloted . Click on hostel status to know more..</h3>";
   }
   else if(mysqli_num_rows($q)==1){
       $_SESSION['stat']= "<h3 id='stat'>You have been verified</h3><br><a href='process.php'> >> Proceed to select Room</a>";
       
       
   }

    else if($rows==0)
    {
    $_SESSION['stat']="<h3 id='stat'>Status= Not Registered </h3><br><button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>Apply For Hostel</button>

  <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Rules & Regulations</h4>
        </div>
        <div class='modal-body'>
          <p>
          
          I have read all the <a href='rules.php'>hostel Rules and Regulations. </a>
          
          
          </p>
        </div>
        <div class='modal-footer'>
          <button type='submit' class='btn btn-default' data-dismiss='modal' method='post' name='accept' onclick=dd()>Accept</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>";
    }
    
    else if($rows==1) {
    $_SESSION['stat']="<h3 id='stat'>Status = Registered, Waiting for Confirmation</h3><br><a href='print.php'>Take printout of your form</a>"; }


?>


<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.css" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>
    
    <script src="js/profile.js" type="text/javascript"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <script src="js/dd.js" type="text/javascript"></script>
    <script src="js/details.js" type="text/javascript"></script>
    <script src="js/payment.js" type="text/javascript"></script>
    <script src="js/status.js" type="text/javascript"></script>
    
<title>
Hostel Seat Booking 
</title>

</head>
<body>
    <!*******************************header***************************************************>
<div>
<div class="row">
    <p class="logout">
     <a href="welcome.php" class="btn btn-info btn=lg" onclick="welcome.php">
         <span class="glyphicon glyphicon-home"></span></a>
        
    <a href="profile.php"><button class="btn btn-info btn=lg">
        <span class="glyphicon glyphicon-user"></span></button> </a>
        
        <a href="logout.php" class="btn btn-info btn=lg">
        <span class="glyphicon glyphicon-log-out"></span>
        </a>
        </p>
        <?php 
        $image = "img/users/'".$_SESSION['sid']."'.jpg";
    
        if (empty($image)){?>
    
        <img src="img/users/default.jpg" class="img-circle img-responsive" height="90px" width="90px">
        <?php } 
        else 
        ?>
        <img src="img/users/<?php echo $_SESSION['sid'];?>.jpg" class="img-circle img-responsive" height="90px" width="90px">
    <center><h2 style="color:white;"><b><?php echo $_SESSION['uname'];?></b></h2>
        
        
        
   </center>
</div>
    
    
    <!**************************************************content******************************************>
 
   <div id="container">
      <div class="sidebar">
        <ul id="nav">
            <li><button class='btn btn-default' onclick=status()>Hostel Status</button></li>
            <li><button class='btn btn-default' onclick=details()>Details</button></li>
            <li><button class='btn btn-default' onclick=payment()>Payment Details</button></li>
        </ul>
      </div>
      <div id="content">
          <center><b><br><?php echo $_SESSION['stat'];?>
                         </b><br>
              </center>
      </div>
    
    
    
    </div>
    </div>
    
    
    
    
    
    
    
    </body>
</html>
