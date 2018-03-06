
<?php
$con = mysqli_connect("localhost", "root", "", "Donation");

$username=mysqli_real_escape_string($con,strtolower('Sachin'));
$password=md5('2345');
$sql= "INSERT INTO admin(name,password)"."VALUES('$username','$password')";
if(mysqli_query($con,$sql)===true){
	echo'database was updated';
}
else{
	echo'error';
}

?>
