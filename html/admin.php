<!DOCTYPE html>
<html>

<head>
<title>as a admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin1.css">
	<link rel="icon" href="css/images/cc.png">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div id="cyber">
		<h1><a href="mainPage.php">Donation center</a></h1>
		<ul>
			<li id="home"><a href="mainPage.php">Home</a></li>
		</ul>
	</div>
	<div id="main-content">
		<div id="Admin">
		<img src="css/images/profile.png" class="icon">
			<h2>Admin</h2>
			
			<form class="form" action="adminlogin.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<p>Username</p>
					<input type="text" name="username" placeholder="Enter username" required/>
				<p>Password</p>
					<input type="password" name="password" placeholder="Enter password"autocomplete="new-password" required/>
				<input type="submit" name="submit" value="Login">
				<div id="sign">
					<h3><a href="signup.php">Sign up</a></h3>
				</div>
				<div id="login">
					<h3><a href="profile.php">Login</a></h3>
				</div>
				<a href="#">Forget password</a>
			</form>
			
	</div>
	</div>
	<div id="footer">
		<h2>&copy; Allright Reserved</h2>
		<div id="suscribe">
			<ul>
				<li><a href=""><i class="fa fa-facebook" style="font-size:48px;color:black"></i></a></li>
				<li><a href=""><i class="fa fa-twitter" style="font-size:48px;color:black"></i></a></li>
				<li><a href=""><i class="fa fa-youtube" style="font-size:48px;color:black"></i></a></li>
			</ul>
		</div>
	</div>
	
</body> 

</html>