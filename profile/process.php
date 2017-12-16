<!-- Developed by: Arun kumar verma - vemarun.in ----->
<?php
session_start();
require 'db_connect.php';

        if(isset($_POST['sub'])){
        $que=mysqli_query($db,"select * from bh3 where roomno='".$_POST['roomno']."'");
            while($row=mysqli_fetch_array($que))
            {
                $sid1=$row['sid1'];
                $sid2=$row['sid2'];
                $sid3=$row['sid3'];
                
            }
        if($sid1==NULL){
       $q=mysqli_query($db,"update bh3 
        set sid1=$_SESSION[sid] where roomno ='".$_POST['roomno']."'");
        }
            
            else if($sid1!=NULL and $sid2==NULL){
        $q=mysqli_query($db,"update bh3 
        set sid2=$_SESSION[sid] where roomno ='".$_POST['roomno']."'");   
              }
            
            else if($sid1!=NULL and $sid2!=NULL and $sid3==NULL){
                $q=mysqli_query($db,"update bh3 
        set sid3=$_SESSION[sid] where roomno ='".$_POST['roomno']."'");   
             }
            
     $roomdone=mysqli_query($db,"update queue set roomdone='1', hostel='bh3', roomno='".$_POST['roomno']."' where sid=$_SESSION[sid]");             
    header('location:welcome.php?status=success');
        } 
   

?> 
<html>
<head>
<title>
    Select Room</title>
     <link href="style2.css" rel="stylesheet" type="text/css">
    

   
    </head>
    <body>
    
 <?php
        $qu=mysqli_query($db,"select * from queue where sid=$_SESSION[sid]");
        $seater=mysqli_query($db,"select seater from payment where sid=$_SESSION[sid]");
while($row=mysqli_fetch_array($qu))
{
    $a=$row['branch'];
    $b=$row['year'];
}
$q=mysqli_query($db,"select * from criteria where sid=$_SESSION[sid]");
while($row=mysqli_fetch_array($q))
{
    $c=$row['atten'];
    $d=$row['percent'];
}
if($a=='cse')
{
switch($b)
{
    case 1: $hostel='bh3';
            $qu=mysqli_query($db,"select roomno from bh3 where (sid1 is NULL or sid2 is NULL or sid3 is NULL)");
            if (!$qu) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
            echo "<center><h3><br>Following Rooms are available for you<br>Hostel:BH3</h3><br>";
            echo "<form method='post'><select name='roomno'>";
            while($row=mysqli_fetch_array($qu))
            {
                echo "<option>";
                echo $row['roomno'];
                echo "</option>";
            }
        echo "</select><br><br>";
        echo "<input type='submit' name='sub'></form></center><br><br>";
        $tablename='bh3'; include 'sql_script.php';
        break;
  /*case 2:if($seater=='single')
        {
            $hostel='bh1b';
            $qu=mysqli_query($db,"select roomno from bh1b where sid1 is null");
            echo "<center><h3><br>Following Rooms are available for you<br>Hostel:BH3</h3><br>";
            echo "<form method='post'><select name='roomno'>";
            while($row=mysqli_fetch_array($qu))
            {
                echo "<option>";
                echo $row['roomno'];
                echo "</option>";
            }
            echo "</select><br><br>";
        echo "<input type='submit' name='sub'></form></center><br><br>";
        $tablename='bh1b'; include 'sql_script.php';
        break;
        }*/
}
}
        ?>
    
    
   
    </body>
</html>