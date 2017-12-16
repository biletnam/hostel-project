 <?php
session_start();
require 'db_connect.php';

 echo"<table class='table table-bordered table-responsive table-hover table2'>";
    	
        
	$qu="select * from payment where sid=$_SESSION[sid]";	
    $p=mysqli_query($db,$qu);
    while($row=mysqli_fetch_array($p))
    {
        echo"<tr><th>student no.</th><td>".  $row[0]."</td></tr>";
        echo"<tr><th>name</th><td>".  $row[1]."</td></tr>";
        echo"<tr><th>branch</th><td>".  $row[2]."</td></tr>";
        echo"<tr><th>year</th><td>".  $row[3]."</td></tr>";
     	echo"<tr><th>DD no</th><td>".  $row[4]."</td></tr>";
        echo"<tr><th >Bank issuer</th><td>".  $row[5]."</td></tr>";
        echo"<tr><th >Amount</th><td>".  $row[6]."</td></tr>";
        echo"<tr><th >Date</th><td>".  $row[7]."</td></tr>";
       
    }
?>