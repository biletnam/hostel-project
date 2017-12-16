<?php session_start();
require 'db_connect.php';


    	
        
	$qu="select * from users where sid=$_SESSION[sid]";	
    $p=mysqli_query($db,$qu);
    while($row=mysqli_fetch_array($p))
    {
        
     	$mob=$row[2];
        $email=$row[3];
        
    }
$q="select * from payment where sid=$_SESSION[sid]";	
    $pt=mysqli_query($db,$q);
    while($row=mysqli_fetch_array($pt))
    {
        
        $branch=$row[2];
        $year=$row[3];
     	$ddno=$row[4];
        $bank=$row[5];
        $ddamount=$row[6];
        $dddate=$row[7];
       
    }
    
        
        

?>
<html>
    <head>
        <script src="jquery/jquery.min.js" type="text/javascript"></script>
       
                <title>Akgec Hostel Reg</title>
<style>
    *{
        margin: 3;
        padding: 3;
    }
    #logo{
        float:left;
        height: 80px;
        widows: 80px;
    }
    tr{
        width: auto;
    }
    th{
        width: 20%;
    }
    td{
        width: 40%;
    }
    table#payment{
        border-style: dotted;
    }
    
    #pic{
        float: right;
    }   
    
</style>
                 <script type="text/javascript">
 
</script>
        
        </head>
        <body>
            <div id="page-content">
<div id="content">
<div id="header"><img src="img/AKGEC.png" id="logo"><center><h2>AJAY KUMAR GARG ENGINEERING COLLEGE, GHAZIABAD</h2>
    <h3>Hostel Registration Form</h3></center><img src="img/users/<?php echo $_SESSION['sid'];?>.jpg" id="pic" height="90px" width="90px"></div>
<table>
    <tr><th>Name : </th><td><?php echo $_SESSION['uname']; ?><br></td></tr>
    <tr><th>Student No:</th><td><?php echo $_SESSION['sid']; ?><br></td>
    <th>Mobile</th><td><?php echo $mob; ?></td></tr>
<tr><th>Date of birth</th><td>...............</td><th>Email:</th><td><?php echo $email;?></td></tr>
    <tr><th>Course:</th><td>.........</td><th>Branch:</th><td><?php echo $branch;?></td><th>Year:</th><td><?php echo $year;?></td></tr>
    <tr><th>Father's Name:</th><td>......</td><th>Mother's Name:</th><td>......</td></tr>
    <tr><th>Parent Mobile No:</th><td>......</td></tr>
    <tr><th>Permanent Residential Address:</th><td>.................................<br>....................................</td></tr>
</table>

<table id="payment">
    <tr><h4>Payment Information:</h4></tr>
    <tr><th>DD Number:</th><td><?php echo $ddno;?></td><th>Bank Name:</th><td><?php echo $bank;?></td></tr>
    <tr><th>DD Amount:</th><td><?php echo $ddamount;?></td><th>DD Date:</th><td><?php echo $dddate;?></td></tr>
<th></th>

</table>
<p>
    <center><h3>Declaration</h3></center>
I understand that applying for hostel and depositing fees doesnot guarantee allotment which will be based on availability and criteria adopted by the college authority.

In case hostel accomodation is allotted, i will strictly follow the rules and regulations of the hostel/mess, as framed from time to time, failing which hostel authority may take appropriate penal action against me, including expulsion from hostel.
    
I will submit completed local guardian form and medical fitness certificate at the time of hostel allotment (if alloted) , failing which my allotment will be cancelled.
    
I certify that i don't suffer from any form of seizure, chronic disease or depression.
</p>
<table>
    <tr><th>Date:</th><td><?php echo date("d/m/y");?></td><th>Signature:</th><td>..............</td>
</table>
                </div></div>
            
   
    </body></html>


