<html>
<head>
    <script src="../bootstrap/js/jquery.min.js"></script>
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
            <li><a href=#>Dashboard</a></li>
            

         
          
          </ul>
      </div>
      <div id="content">                            <!---- page contents ------>
       <div id="bh"> <a href="bh1.php" id="bh1"> <div class="block">
           BH1<br><hr>Boy's Hostel 1
           </div></a> 
          <a href="bh2.php" id="bh2"><div class="block">
           BH2<br><hr>Boy's Hostel 2
              </div></a>
           <a href="bh3.php" id="bh3"><div class="block">
           BH3<br><hr>Boy's Hostel 3
               </div></a> 
               </div>
        
         <div id="gh"> <a href="gh1.php" id="gh1"><div class="block">
           GH1<br><hr>Girl's Hostel 1 
             </div></a> 
          <a href="gh2.php" id="gh2"> <div class="block">
           GH2<br><hr>Girl's Hostel 2 
              </div> </a>
              <a href="gh3.php" id="gh3">
          <div class="block">
           GH3<br><hr>Girl's Hostel 3
                  </div></a>
                  </div>
          
        
          
        </div>
    </div>
    </body>
</html>