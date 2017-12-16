<?php
session_start();
require 'db_connect.php';
$q=mysqli_query($db,"select * from queue where sid=$_SESSION[sid]");
while($row=mysqli_fetch_array($q)){
        echo"<table class='table table-bordered table-responsive table-hover table2'>";
        echo"<tr><th >Hostel</th><td>'".$row['hostel']."'     </td></tr>";   /****hostel boys/girls/year********/
        echo"<tr><th >Room No:</th><td>'".$row['roomno']."'    </td></tr>";  /****Room No**********/
        echo"</table>";
}
        ?>