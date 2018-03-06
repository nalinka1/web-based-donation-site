<!DOCTYPE html>
<html>

<head>
<?php
	$con = mysqli_connect("localhost", "root", "heshan", "Donation");
	$sql="SELECT*FROM donar";
	$asd=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($asd);
	echo $row["];
?>
</head>
<body>
</body>