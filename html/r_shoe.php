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
		<h1><a href="mainPage.php">Donation Center</a></h1>
		<ul>
			<li id="home"><a href="receiver_home.php">Home</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	<div id="main-content">
		here you have shoes..........
		<?php
		session_start();
		include 'database.php';
		$case='shoe';
		$query="SELECT*FROM $case";
		$check=mysqli_query($connected,$query);
		echo '<hr>';
		include 'show_list.php';
		include 'req_button.php';
		echo "<table border='1' width='70%'>";
		echo '<th>Item Number</th>'.'<th>Description</th>'.'<th>Quantity</th>'.'<th>Image</th>'.'<th>Donated by</th>'.'<th>Action</th>';
		while($row=mysqli_fetch_array($check)){
			echo '<tr>';
			$_SESSION['Description']=$row['Description'];
			$_SESSION['doner_name']=$row['donername'];
			echo '<td width="10%" align="center">'.$row['ID'].'</td>'.'<td width="40%">'.$row['Description'].'</td>'.'<td width="10%" align="center">'.$row['Quantity'].'</td>';
			$item=$row['Photo'];
			echo '<td width="20%" align="center">'."<img src='uploads/$item' width='100px' height='100px'>".'</td>';
			require 'add_cart.php';
			echo '</tr>';
		}
		echo'</table>';
		
		//print_r($_SESSION['name']);
		?>
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