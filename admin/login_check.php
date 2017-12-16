<?php
session_start();
require 'db_connect.php';
extract($_POST);
if(isset($sub))
{
$qu= " select * from admin where uname='$uname' AND pass='$pass' ";
$login= mysqli_query($db,$qu);

    if($login === FALSE) { 
    mysqli_error();
    }

    $rows = mysqli_num_rows($login);
    
    if ($rows==1) {
      // Set username session variable
        
      $_SESSION['uname'] = $_POST['uname'];


     // Jump to secured page
      header("Location:index.php");
     }
     else {
     // Jump to login page
         header("location:login.php?action=unsuccessful");
         
     
     }
     exit;
}

     ?>