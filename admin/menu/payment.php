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
            
            
            
            
            

         
          
          </ul>
      </div>
      <div id="content"><!---- page contents ------>
         
          <div class="alert alert-info alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Alert!</strong> All checked Student can book hostel -  carefully verify each Data before submitting.
</div>
          <div id="payment_info">
              
              <?php
                  //   <?php
require 'db_connect.php';
              if(isset($_POST['save']))
              {
                  for ($i=0; $i<count($_POST['check']);$i++) 
                  {
                  $qu=mysqli_query($db,"update payment set confirmed ='1' WHERE sid= '".$_POST['check'][$i]."'");
      
   if($qu==1)
   {

echo "<script type='text/javascript'> 
    spop({
	template: 'Success! Student has been Verified',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'success',
	autoclose: 2000
        });
   </script>";
       $q="insert into queue(sid,name, branch, year) select sid,name,branch,year from payment WHERE sid= '".$_POST['check'][$i]."'";
       mysqli_query($db,$q);
}
      else
      {
    echo " <script>
    spop({
	template: 'Some error has been occurred',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'error',
	autoclose: 2000
});
</script>";

    }
  } 
 }
              
//require 'db_connect.php';
$qu="select * from payment";

$res=mysqli_query($db, $qu);
?>
<form method='post'>
<table class="table-bordered table-hover">
    <thead>
    <tr>
        <th>Check</th>
        <th>SID</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Year</th>
        <th>DD Number</th>
        <th>Bank Name</th>
        <th>DD Amount</th>
        <th>DD Date</th></tr></thead>
    <tbody>
    <?php 
        while($row=mysqli_fetch_array($res))
{   ?>
        <tr>
            <?php if($row['confirmed']==NULL)
        { ?>
           <td><input type="checkbox" id="check" name="check[]" value="<?php echo $row['sid'] ?>"></td>
       <?php }
                  else
                  {
            echo"<td>Verified</td>"; 
        }?>
            
    <td><?php echo $row[0];?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
    <td><?php echo $row[3];?></td>
    <td><?php echo $row[4];?></td>
    <td><?php echo $row[5];?></td>
    <td><?php echo $row[6];?></td>
    <td><?php echo $row[7];?></td></tr>
        <?php };?>
        
    </tbody>
    </table><br>
    <input type="submit" name="save"></form>  
          </div>
    <?php /*$number = count($_POST['check']);  
          echo "Number of selected students '".$number."'"; */?> 
        </div>
    </div>
 
    </body>
</html>

