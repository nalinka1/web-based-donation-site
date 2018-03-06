<?php
include "donerhedder.php";
?>
	<div id="main-content">
		<h1>Thank you for your Donation</h1>
		<br>
		<p>Lets make a better place in the world.</p>
		<br>
		<p>Please choose the donation type.</p>
		<?php
		require("libdoner.php"); 
		session_start();
		
		echo $_SESSION['username']; 
		?>
		
		
	</div>
<?php
	include "donerfooter.php";
?>
