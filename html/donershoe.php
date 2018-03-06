<?php
include "donerhedder.php";
?>
	<div id="main-content">
		<h1>Thank you for your Donation</h1>
		<br>
		<p>Lets make a better place in the world.</p>
		<br>
		<img src="cssdoner/images/shoe1.png" width="200px" height="200px" border="0">
		<p>Please fill the details.</p>
		<br>
		<form action="dmainrun1shoe.php" method="GET" >
			<input type="text" name="Quentity" placeholder="Quentity" required/>
			<br>
			<input type="text" name="Description" placeholder="Description" required/>
			<br>
			<input type="hidden" name="name" value="shoe">
			<br><input type="submit">
		</form>	
		
		
	</div>


<?php
include "donerfooter.php";
	?>
