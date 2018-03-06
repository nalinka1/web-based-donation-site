<?php
session_start();
$_SESSION['message']='';
$con = mysqli_connect("localhost", "root", "", "Donation");

if(!$con){
	die('error occure with the connection');
}
else{
	$user = strtolower($_POST['username']);
    $password = $_POST['password'];
	
	$sql2="SELECT * FROM admin";
	$result=mysqli_query($con,$sql2);
	$users = Array();
	while($row = mysqli_fetch_Array($result)) {
		$users[]=$row['name']; 	
	}
	if(!in_array($user,$users)){
		header("location:adminError.php");
	}
	else{
		$stmt = mysqli_prepare($con, "SELECT * FROM admin WHERE name = ?");
		mysqli_stmt_bind_param($stmt, "s", $user); 
		mysqli_stmt_execute($stmt);
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$hash= $row['password'];
		
		$my= md5($password);
		if ($hash==$my) {
			$_SESSION['username']=$user;
			echo "adminout";
		}
		else{
			header("location:adminError.php");
		}
	}
}
?>