<?php
$a=$_REQUEST['num1'];
$b=$_REQUEST['num2'];
$rem=($a-$b *(int)($a/$b));
printf("Remainder without using modulo : %d",$rem);
?>

