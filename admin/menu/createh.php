<?php
require 'db_connect.php';
extract($_POST);
if(isset($sub))
{
if ($stperroom==1){
$qu=("CREATE TABLE 'hname' (roomnos int(3) AUTO_INCREMENT primary key, sid1 int(7))");
    
    if (mysqli_query($db,$qu)) {
    echo "Table $hname created successfully";
    }
    else {
    echo "Error creating table: " . $db->error;
    }
}
  else if($stperroom==2){
        $qu=("CREATE TABLE '$hname' (roomnos int(3) AUTO_INCREMENT primary key, sid1 int(7)), sid2 int(7)");
    if (mysqli_query($db,$qu)) {
    echo "Table $hname created successfully";
    }
    else {
    echo "Error creating table: " . $db->error;
    }
        
    }
    else if($stperroom==3){
        $qu=("CREATE TABLE '$hname' (roomnos int(3) AUTO_INCREMENT primary key, sid1 int(7)),sid2 int(7)),sid3 int(7))");
    if (mysqli_query($db,$qu)) {
    echo "Table $hname created successfully";
    }
    else {
    echo "Error creating table: " . $db->error;
    }
    }
    else
    { 
    echo "Max Student per room allowed is 3";
    }
}
?>