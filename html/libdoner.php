<?php
class donner{
	private $discriptionvar;
	private $quentityvar;
	private $databasevar;
	
	public function setdata1($discriptionvar,$quentityvar,$databasevar){
		
		$this->discriptionvar=$discriptionvar;
		$this->quentityvar=$quentityvar;
		$this->databasevar=$databasevar;
	}
	
	public function getdiscription(){
		return $this->discriptionvar;
	}
	public function getquentity(){
		return $this->quentityvar;
	}
	public function getdatabase(){
		return $this->databasevar;
	}
	public function redirect($des){
		header("Location: ".$des.".php?uploadsucsess");
	}
	public function uploadfile($place){
			$redirr=$place;
			 $fileout="default.jpg";
			if(isset($_FILES['profile'])===true){
				if(empty($_FILES['profile']['name'])===false){
						$file=$_FILES['profile'];
						$filename=$_FILES['profile']['name'];
						$filetepname=$_FILES['profile']['tmp_name'];
						$filesize=$_FILES['profile']['size'];
						$fileerror=$_FILES['profile']['error'];
						$filetype=$_FILES['profile']['type'];
						$fileExt=explode('.',$filename);
						$fileActualExt=strtolower(end($fileExt));
			 
						$allowed=array('jpg','jpeg','png');
			 
						if(in_array($fileActualExt,$allowed)){
							if($fileerror===0){
								if($filesize<1000000){
									$filenamenew=uniqid('',true).".$fileActualExt";
									$filedestination='uploads/'.$filenamenew;
									move_uploaded_file($filetepname,$filedestination);
									$_SESSION['name++']=$filenamenew;
									echo $filenamenew;
									
									//header("Location: ".$redirr.".php?uploadsucsess");
									echo "File upload was successful!!";
								}
								else{
									echo "file too large";
									
								}
							}
							else{
								echo "error uploading file";
								
							}
						}
						else{
							echo "you cannot upload files if this type";
							
						}
				}else{
					
					echo "File upload was unsuccessful!!";
					
					//header("Location: ".$redirr.".php?uploadnotsucsess");
				}
				
			}
			
		return $fileout;
			
	}
	public function connect123(){
		$connected=mysqli_connect('localhost','root','','donation');
		if($connected){
			echo '<br>'.'connected to the database','<br>';
		}
		else{
			echo 'not connected';
		}

	}
	public function readdata(){
		require 'databasegate.php';
		$query="SELECT*FROM book";
		$check=mysqli_query($connected,$query);
		while($row=mysqli_fetch_array($check)){
			echo $row['Description'].' '.$row['Photo'].' '.$row['Quantity'].'</br>';
		}
	}
	public function writedata($dis,$quen,$photo,$table,$doner,$show){
		echo $dis,$quen,$photo,$table,$doner,$show;
		echo '==========================';
		require 'databasegate.php';
		$query="INSERT INTO $table(Description,Quantity,Photo,donername,like123) ".
			"Values ('$dis','$quen','$photo','$doner','$show');";
		$check=mysqli_query($connected,$query);
		
		
	}
	
}




?>