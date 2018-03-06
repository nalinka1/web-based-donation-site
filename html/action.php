<?php
	session_start();
	$_SESSION['name'][]=$_SESSION['Description'];
	$_SESSION['Doner_name'][]=$_SESSION['doner_name'];
	//print_r($_SESSION['name']);
	//print_r($_SESSION['Doner_name']);
	header('Location: '.$_SERVER['HTTP_REFERER']);
?>