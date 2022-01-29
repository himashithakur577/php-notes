<?php 
$m1=$_REQUEST['num1'];
$m2=$_REQUEST['num2'];
$m3=$_REQUEST['num3'];
$m4=$_REQUEST['num4'];
$m5=$_REQUEST['num5'];
$m=$m1+$m2+$m3+$m4+$m5;
printf("1st subject marks : %d <br>",$m1);
printf("2nd subject marks : %d <br>",$m2);
printf("3rd subject marks : %d <br>",$m3);
printf("4th subject marks : %d <br>",$m4);
printf("5th subject marks : %d <br>",$m5);

 printf("total percent of 5 subject : %.2f",($m/500)*100);

?>