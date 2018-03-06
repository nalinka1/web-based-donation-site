<?php  
include "dmainrun1.php";

echo $don->getdiscription();
//$quentityy=$don->getquentity();
//$databasename=$don->getdatabase();
//echo $discriptions;
//$discriptions,$quentityy,$img,$databasename
$don->writedata('$discriptions','$quentityy','$img','$databasename');
//$don->readdata();
?>