<html>
<head>
	<title>We are with you</title>
	<link rel="stylesheet" type="text/css" href="css/receiver_home.css">
	<link rel="icon" href="css/images/cc.png">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	 
</head>
<body>
	<div id="cyber">
		<h1><a href="r_logout.php" >Donation Center</a></h1>
		<ul>
			<li id="home"><a href="mainPage.php">Logout</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	<div id="main-content">
		<p align="center">
		<?php
			include('receiver_welcom.php');
		?>
		Welcome to our community. Don't hesitate about your future. We are here to help you to build a better future for you.</p></br>
		<p>Check for whatever your needs by clicking below catogaries........</p></br>
		<div id="image" align="center" >
			<a href ="r_bag.php"><img src="css/images/bag1.png" height="200px" width="200px" id="bag"></a>
			<a href ="r_book.php"><img src="css/images/book1.png" height="200px" width="200px" id="book"></a>
			<a href ="r_shoe.php"><img src="css/images/shoe1.png" height="200px" width="200px" id="shoe"></a>
			<a href ="r_sport.php"><img src="css/images/sport1.png" height="200px" width="200px" id="sport"></a>
			<a href ="r_music.php"><img src="css/images/music1.png" height="200px" width="200px" id="music"></a>
			
		</div>
		<div id="table" align="center">
			<table id="table1">
			<tr><th><a href ="r_bag.php">Bags</a></th>
			    <th><a href ="r_book.php">Books</a></th>
				<th><a href ="r_shoe.php">shoes</a></th>
				<th><a href ="r_sport.php">Sport Instruments</a></th>
				<th><a href ="r_music.php">Music Instruments</a></th>
			</tr>
			</table>
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
<?php
	session_start();
	$_SESSION['name']=array();
	$_SESSION['Doner_name']=array();
	$user=$_SESSION['username'];
	$_SESSION['username1']=$user;
?>