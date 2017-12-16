<html>
<head>
    <link href="jqueryui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="spop/spop.min.css" rel="stylesheet" type="text/css">
    <script src="jquery/jquery.min.js" type="text/javascript"></script>
    <script src="jqueryui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="spop/spop.min.js" type="text/javascript"></script>
<link href="style2.css" rel="stylesheet" type="text/css">
    
    <script>
    $( function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd' });
  } );

    </script>
</head>
    
<body> <center>
<form method="post">
<input type="text" name="sid" placeholder="Student id"><br>
<input type="text" name="name" placeholder="Name"><br>
<input type="text" name="branch" placeholder="Branch"><br>
<input type="text" name="year" placeholder="Year- 1/2/3/4"><br>
<input type="text" name="ddno" placeholder="DD No."><br>
<input type="text" name="bname" placeholder="Bank Name"><br>
<input type="text" name="amount" placeholder="DD Amount"><br>
<input type="date" name="date" id="datepicker" placeholder="DD date"><br><br>Select Seater Choice:(only for 2, 3 and 4 year Btech. students)<br><br>
<select name="seater">
    <option>Select</option>
    <option>Single</option>
    <option>Triple</option></select><br><br><br>
<input type="submit" name="sub">
</form>
    </center>  
    
   <?php
session_start();
require 'db_connect.php';
extract($_POST);
if(isset($sub))
{
$qu="insert into payment(sid,name,branch,year,ddno,bname,amount,dddate,seater) values('$sid','$name','$branch','$year','$ddno','$bname','$amount','$date','$seater')";
$res=mysqli_query($db,$qu);
    if($res==1){
   echo "<script>
     spop({
	template: 'Success! Data sent',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'success',
	autoclose: 2000
        });</script>";
    header('Refresh: 3; url=welcome.php?status=success');
        
}
    else {
        "<script>
        spop({
	template: 'Error! Some error occurred while submitting the data',
	group: 'submit-satus',
    position  : 'top-right',
	style: 'error',
	autoclose: 2000
        });</script>";
header('location:dd.php?status=failure');
    }

}?> 
</body> 
</html>