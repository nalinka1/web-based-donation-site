<?php  
require("libdoner.php"); 
session_start();
$don=$_SESSION['don'];
$don->uploadfile("donerbag");
$don->redirect('donerbag++');
?>