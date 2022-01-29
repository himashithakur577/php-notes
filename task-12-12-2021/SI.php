<?php 
$_pa=$_REQUEST['pa'];
$_ra=$_REQUEST['ra'];
$time=$_REQUEST['t'];

printf("Simple Interest is : %.3f  ",($_pa*$_ra*$time)/100);

?>