<?php
session_start();
require 'db_connect.php';
extract($_POST);
if(isset($sub))
{
$qu= " select * from users where sid='$sid' AND pass='$pass' ";
$login= mysqli_query($db,$qu);

    if($login === FALSE) { 
    mysqli_error();
    }

    $rows = mysqli_num_rows($login);
    
    if ($rows==1) {
      // Set username session variable
        
      $_SESSION['sid'] = $_POST['sid'];
      $_SESSION['sname']=$_POST['name'];


     // Jump to secured page
      header("Location:profile/welcome.php");
     }
     else {
     // Jump to login page
         header("location:index.php?action=unsuccessful");
         
     
     }
     exit;
}

     ?>