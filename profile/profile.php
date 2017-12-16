<!---***********************Ajax page********************************-->
<?php
session_start();?>



<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.css" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css">
    <link href="spop/spop.min.css" rel="stylesheet" type="text/css">
<script src="spop/spop.min.js" type="text/javascript"></script>
    
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
        
    <button class="btn btn-info btn=lg" onclick="profile()">
        <span class="glyphicon glyphicon-user"></span></button> 
        
        <a href="logout.php" class="btn btn-info btn=lg">
        <span class="glyphicon glyphicon-log-out"></span>
        </a>
        </p>
        <img src="img/users/<?php echo $_SESSION['sid'];?>.jpg" class="img-circle img-responsive" height="90px" width="90px">
    <center><h2 style="color:white;"><b><?php echo $_SESSION['uname'];?></b></h2>
 </center></div>
    </div>
    
    
    
    <div id="container"><br><br>
      <center>  <div id="upload">
    <form action="" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="image" ><br>
    <input type="submit" value="Upload Image" name="submit">
        <br><br>
        
      
        
</form>
    
        </div></center></div>
    <?php
    extract($_POST);
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $value=explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($value));
      $newfilename=$_SESSION['sid'] .".".$file_ext;
      
      $expensions= array("jpeg","jpg");
      
      if(in_array($file_ext,$expensions)=== false){
             echo "<script>
     spop({
	template: 'Error! Only .jpg < 100Kb allowed',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'error',
	autoclose: 2000
        });</script>";
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
             echo "<script>
     spop({
	template: 'Error! Only .jpg < 100Kb allowed',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'error',
	autoclose: 2000
        });</script>";
         $errors[]='File size must be less than 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/users/".$newfilename);
         echo "<script>
     spop({
	template: 'Success! Image uploaded',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'success',
	autoclose: 2000
        });</script>";
      }else{
           echo "<script>
     spop({
	template: 'Error! Only .jpg < 100Kb allowed',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'error',
	autoclose: 2000
        });</script>";
         
      }
   }
?>
    
    
    </body></html>

 


    
    
    
    