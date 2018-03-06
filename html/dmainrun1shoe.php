<?php require("libdoner.php"); 
session_start();
$don= new donner();
$_SESSION['don']=$don;
if(is_numeric($_GET['Quentity'])){
	$quentityy=$_GET['Quentity'];
	$discriptions=$_GET['Description'];
	$databasename=$_GET['name'];
	$don->setdata1($discriptions,$quentityy,$databasename);
	$don->redirect('donershoe+');
	}else{
		$don->redirect('donershoe');
	}
	
?>