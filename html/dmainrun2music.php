<?php  
require("libdoner.php"); 
session_start();
$don=$_SESSION['don'];
$don->uploadfile("donermusic");
$don->redirect('donermusic++');
?>