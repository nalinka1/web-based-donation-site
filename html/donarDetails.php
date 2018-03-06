<?php
session_start();
$_SESSION['message']='';
$con = mysqli_connect("localhost", "root", "", "donation");

if(!$con){
	die('error occure with the connection');
}
else if($_SERVER['REQUEST_METHOD']=='POST'){
	if(($_POST['password']===$_POST['re_password'])and($_POST['password']!=="")){	
		$first_name=mysqli_real_escape_string($con,$_POST['firsts']);
		$last_name=mysqli_real_escape_string($con,$_POST['lasts']);
		$username=mysqli_real_escape_string($con,strtolower($_POST['username']));
		$email=mysqli_real_escape_string($con,$_POST['email']);
		
		$password=md5($_POST['password']);
		
		
		
		$sql2="SELECT * FROM donar";
		$result=mysqli_query($con,$sql2);
		$users = Array();
		$emails= Array();
		while($row = mysqli_fetch_Array($result)) {
			$users[]=$row['user']; 	
			$emails[]=$row['email'];
		}
		if(in_array($username,$users)){
			header("location: DuserError.php");
		}
		else if(in_array($email,$emails)){
			header("location: DemailError.php");
		}
		else{
			
			if(!isset($_POST['show'])){
				
				$image=mysqli_real_escape_string($con,"image/profile/default.png");
				$sql= "INSERT INTO donar(first,last,user,email,password,picture)"."VALUES('$first_name','$last_name','$username','$email','$password','$image')";
				if(mysqli_query($con,$sql)===true){
					$_SESSION['username']=$username;
					$_SESSION['check']="No";
					echo $_SESSION['check'];
					echo'database was updated';
					header("location:  donermain.php");
					
				}
			}
			else if(empty($_FILES['profile']['name'])===true){
				$image=mysqli_real_escape_string($con,"image/profile/default.png");
				$sql= "INSERT INTO donar(first,last,user,email,password,picture)"."VALUES('$first_name','$last_name','$username','$email','$password','$image')";
				if(mysqli_query($con,$sql)===true){
					$_SESSION['username']=$username;
					$_SESSION['check']="yes";
					echo $_SESSION['check'];
					echo'database was updated';
					header("location:  donermain.php");
					
				}
			}
			else{
				$allowed=Array('jpg','jpeg','png','gif');
				$filename=$_FILES['profile']['name'];
				$im_tem=$_FILES['profile']['tmp_name'];
				$fileExt=explode('.',$filename);
				$fileActualExt=strtolower(end($fileExt));
				$size=$_FILES['profile']['size'];
				if($size>5){
					if(in_array($fileActualExt,$allowed)){
						$filenamenew=uniqid('',true).".$fileActualExt";
						$filedestination='image/profile/'.$filenamenew;
						move_uploaded_file($im_tem,$filedestination);
						$image=mysqli_real_escape_string($con,$filedestination);
						$sql= "INSERT INTO donar(first,last,user,email,password,picture)"."VALUES('$first_name','$last_name','$username','$email','$password','$image')";
						if(mysqli_query($con,$sql)===true){
							$_SESSION['username']=$username;
							$_SESSION['check']=$_POST['show'];
							echo $_SESSION['check'];
							echo'database was updated';
							header("location: donermain.php");
					
				}
						
					}
					else{
						header("location: Dtype.php");
					}
				}
				else{
					header("location: Dsize.php");
				}
			}
		}		
	}
	else{
	}
}

?>