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
	
	$sql2="SELECT * FROM donar";
	$result=mysqli_query($con,$sql2);
	$users = Array();
	while($row = mysqli_fetch_Array($result)) {
		$users[]=$row['user']; 	
	}
	if(!in_array($user,$users)){
		$sql2="SELECT * FROM reciever";
		$result=mysqli_query($con,$sql2);
		$users2 = Array();
		while($row1 = mysqli_fetch_Array($result)) {
			$users2[]=$row1['user']; 	
		}
		if(!in_array($user,$users2)){
			header("location:loginError.php");
		}
		else{
			$stmt1 = mysqli_prepare($con, "SELECT * FROM reciever WHERE user = ?");
			mysqli_stmt_bind_param($stmt1, "s", $user); 
			mysqli_stmt_execute($stmt1);
			$result1 = $stmt1->get_result();
			$row1 = $result1->fetch_assoc();
			$hash1= $row1['password'];
			$my= md5($password);
			
			if($hash1==$my){
				$_SESSION['username']=$user;
				header("location: receiver_home.php");
				
			}
			else{
				header("location:loginError.php");
			}
			
		}
		
	}
	else{
		$stmt = mysqli_prepare($con, "SELECT * FROM donar WHERE user = ?");
		mysqli_stmt_bind_param($stmt, "s", $user); 
		mysqli_stmt_execute($stmt);
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$hash= $row['password'];
		
		$my= md5($password);
		if ($hash==$my) {
			$_SESSION['username']=$user;
			$_SESSION['check']="yes";
			header("location: donermain.php");
		}
		else{
			header("location:loginError.php");
		}
		
	}
	
  
}

?>