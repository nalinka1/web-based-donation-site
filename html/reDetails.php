<?php
session_start();
$_SESSION['message']='';
$con = mysqli_connect("localhost", "root", "", "Donation");

if(!$con){
	die('error occure with the connection');
}
else if($_SERVER['REQUEST_METHOD']=='POST'){
	if(($_POST['password']===$_POST['re_password'])and($_POST['password']!=="")){	
		$first_name=mysqli_real_escape_string($con,$_POST['firsts']);
		$last_name=mysqli_real_escape_string($con,$_POST['lasts']);
		$username=mysqli_real_escape_string($con,strtolower($_POST['username']));
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$incomes=mysqli_real_escape_string($con,$_POST['income']);
		
		$password=md5($_POST['password']);
		
		$sql2="SELECT * FROM reciever";
		$result=mysqli_query($con,$sql2);
		$users = Array();
		$emails= Array();
		while($row = mysqli_fetch_Array($result)) {
			$users[]=$row['user']; 	
			$emails[]=$row['email'];
		}
		if(in_array($username,$users)){
			header("location: ruserError.php");
		}
		else if(in_array($email,$emails)){
			header("location: remailError.php");
		}
		else{
			$allowed=Array('jpg','jpeg','png','gif');
			$allowed1=Array('pdf','docx','pptx','ppsx','pptm');
			
			$filename=$_FILES['profile']['name'];
			$im_tem=$_FILES['profile']['tmp_name'];
			
			$detailsname=$_FILES['personal']['name'];
			$de_tem=$_FILES['personal']['tmp_name'];
			
			$fileExt=explode('.',$filename);
			$fileActualExt=strtolower(end($fileExt));
			
			$deExt=explode('.',$detailsname);
			$deActualExt=strtolower(end($deExt));
			$size=$_FILES['profile']['size'];
			if($size>5){
				if(in_array($fileActualExt,$allowed)){
					if(in_array($deActualExt,$allowed1)){
						$filenamenew=uniqid('',true).".$fileActualExt";
						$filedestination='image/profile/'.$filenamenew;
						move_uploaded_file($im_tem,$filedestination);
						$image=mysqli_real_escape_string($con,$filedestination);
						
						$denamenew=uniqid('',true).".$deActualExt";
						$dedestination='image/profile/'.$denamenew;
						move_uploaded_file($de_tem,$dedestination);
						$files=mysqli_real_escape_string($con,$dedestination);
						$sql= "INSERT INTO reciever(first,last,user,email,password,income,picture,details)"."VALUES('$first_name','$last_name','$username','$email','$password','$incomes','$image','$files')";
						if(mysqli_query($con,$sql)===true){
							$_SESSION['username']=$username;
							echo'database was updated';
							header("location: receiver_home.php");
						}
					}
					else{
						header("location: rdetaisError.php");
					}
					
				}
				else{
					header("location: rtype.php");
				}
			}
			else{
				header("location: rsize.php");
			}
			
		}
	}
	else{
	}
}

?>