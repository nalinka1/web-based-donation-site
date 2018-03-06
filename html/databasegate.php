<?php
$connected=mysqli_connect('localhost','root','','donation');
if($connected){
	echo '<br>'.'connected to the database','<br>';
}
else{
	echo 'not connected';
}


	
?>