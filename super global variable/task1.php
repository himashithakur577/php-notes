<?php
print_r($argv);
$sum=0;
$avg=0;
for ($i=1; $i<$argc ; $i++) { 
		$sum=$sum+(int)$argv[$i];
		
	}
	printf("sum is : %d \n",$sum);
	$avg = $sum/($argc-1);
	printf("average is : %d \n",$avg);
?>