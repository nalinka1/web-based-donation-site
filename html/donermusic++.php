<?php
include "donerhedder.php";
?>
	<div id="main-content">
		<h1>Thank you for your Donation</h1>
		<br>
		<p>Lets make a better place in the world.</p>
		<br>
		<h1>hope to see you again</h1>
		
	</div>


<?php
require("libdoner.php"); 
session_start();

if(isset($_SESSION['name++'])){
	$photo=$_SESSION['name++'];
}
else{
	$photo="test.png";
}
$user1=$_SESSION['username']; 
if($_SESSION['check']==="yes"){
$show=$user1;
}
else{
$show="";
}
$don=$_SESSION['don'];
$dis=$don->getdiscription();	
$quen=$don->getquentity();
$table=$don->getdatabase();

$don->writedata($dis,$quen,$photo,$table,$user1,$show);
//$don->readdata();
//session_destroy();

include "donerfooter.php";
	?>
