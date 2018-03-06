<?php
session_start();
$connected = mysqli_connect('localhost','root','','Donation');
if($connected){
	echo '<br>'.'connected to the database'.'<br>';
}
else{
	echo 'not connected';
}
$name123=$_SESSION['username1'];
for($i=0;$i<count($_SESSION['name']);$i++){
	$val=$_SESSION['name'][$i];
	$val1=$_SESSION['Doner_name'][$i];
	$query_set="INSERT INTO admin_receiver(Username,Description_A,donername) VALUES('$name123','$val','$val1')";
	mysqli_query($connected,$query_set);
}
//SESSION_DESTROY();
header('Location: receiver_home.php');
?>