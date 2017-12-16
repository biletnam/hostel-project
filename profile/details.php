
    <?php
session_start();
require 'db_connect.php';

 echo"<table class='table table-bordered table-responsive table-hover table2'>";
    	
        
	$qu="select * from users where sid=$_SESSION[sid]";	
    $p=mysqli_query($db,$qu);
    while($row=mysqli_fetch_array($p))
    {
        echo"<tr><th>Sid</th><td>".  $row[0]."</td></tr>";
        echo"<tr><th>Name</th><td>".  $row[1]."</td></tr>";
     	echo"<tr><th>Mob</th><td>".  $row[2]."</td></tr>";
        echo"<tr><th >Email</th><td>".  $row[3]."</td></tr>";
        
    }
    echo"</table>";
        
        
        ?>

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
    
    </head>
</html>