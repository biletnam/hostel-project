<!----- Dev comment
Project lead: Arun kumar verma
Useless Members: Ashwani Kumar, Ahshan qureshi 
          -._
    .'  _     _  '.
   /   (o)   (o)   \
  |                 |
  |  \           /  |
   \  '.       .'  /
    '.  `'---'`  .'
      '-._____.-'
------->



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width">
	<title>Login - admin panel</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=cyrillic,greek" rel="stylesheet">
    
	<link rel="stylesheet" href="css/template.css" type="text/css">
	<link rel="stylesheet" href="css/login.css" type="text/css">
	
	
</head>
<body style="background:url(img/bg.jpg);">
	<div class="login-margin">
		<div class="login-box background-blue-light">
			<div class="header fore-mute-dark">
								<img class="logo" src="../admin/img/AKGEC.png" alt="admin panel">
								<div class="text">
					<div class="text-extralarge">admin panel</div>
					<div class="text-small text-light"><wbr><wbr>AKGEC - Hostel Seat Management<wbr></div>
				</div>	
			</div>		
			<div class="login-form">			
				<form action="login_check.php" method="post">
					<input type="text" id="uname" name="uname" placeholder="Username" class="border-bottom border-mute-dark"/>
					<input type="password" name="pass" placeholder="Password" class="border-bottom border-mute-dark"/>
					<div class="error text-right text-small"></div>
					<div class="text-right"><input type="submit" name="sub" class="button fore-white background-color-1" value="Enter" /></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>