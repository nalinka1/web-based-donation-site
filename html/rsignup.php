<!DOCTYPE html>
<html>

<head>
<title>Receiver Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/rsignup123.css">
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
		<div id="signup">
		<img src="css/images/profile.png" class="icon">
			<h2>Receiver signup</h2>
			
			<form class="form" action="reDetails.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<div id="first">
				<p>First Name</p>
					<input type="text" name="firsts" placeholder="Enter First name" required/>
				</div>
				<div id="last">
				<p>Last Name</p>
					<input type="text" name="lasts" placeholder="Enter Last name" required/>
				</div>
				<p>Email address</p>
					<input type="text" name="email" placeholder="Enter Email" required/>
				<p>Username</p>
					<input type="text" name="username" placeholder="Enter username" required/>
				<p>Password</p>
					<input type="password" name="password" placeholder="Enter password" utocomplete="new-password" required/>
				<p>Confirm Password</p>
					<input type="password" name="re_password" placeholder="Enter password" utocomplete="new-password" required/>
				<p>Income</p>
					<input type="text" name="income" placeholder="Enter income" required/>
				<p>validated document of personal details</</p>
					<input type="file" name="personal"  required/ >
				<p>Profile picture(3<Mb)</p>
					<input type="file" name="profile" required/>

				<input type="submit" name="submit" value="Sign up">
				<div id="login">
					<h3><a href="profile.php">Login</a></h3>
				</div>
				<div id="admin">
					<h3><a href="admin.php">Admin</a></h3>
				</div>
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