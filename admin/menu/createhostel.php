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
          
    <div class="hero-unit"> 
    <div id="status"></div>
    <!---title---->
    <h1>
    Create Hostel
    </h1><br>
    <p>Here Hostels and no. of rooms in respective hostel can be created.</p>
    </div>
    
    <!---on clicking will load respective page---> 
    
    <button class="btn btn-large btn-primary" id="show1">     
    <span class="glyphicon glyphicon-plus">
    CreateHostel</span>
    </button> 
    <button class="btn btn-large btn-primary" id="show2">     
    <span class="glyphicon glyphicon-edit">
    Edit Hostel</span>
    </button>
    
    <div id="content1" style="display:none">  <!---div where content will be displayed further --->
        
        <!-----Create Hostel Form--------->
        
        <form  action='createh.php' method='post' id='myform' >
            Hostel Category:
              
        <select>
                    <option>Select</option>
            <option>Boy</option>
            <option>Girl</option>
                    </select><br><br>
               
                Hostel Name :
            <input type="text" id="hname" name="hname" Placeholder="Input Hostel Name e.g.Boys Hostel 1/2/3"><br><br>
                No. Of Rooms : 
            <input type="text" id="roomnos" name="roomnos" Placeholder="Input Number of Rooms"><br><br>Number of students per room: 
            <input type="text" id="stperroom" name="stperroom" Placeholder="Number of students per room"><br><br>
       <button class="butt btn  btn-primary" type="submit" value="Create" name="sub" id="createh">Create</button><br>
       </form><br><br>
        </div>
    
    
    
        </div>
    </div>
</body>



</html>