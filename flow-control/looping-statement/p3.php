<?php

//wap in php to print reverse number

$no = readline("Enter the number : ");
$count = strlen($no);

$sum = 0;
for($no=$no;$no!=0;$count--){
$q= $no/10;
$rem=$no%10;
$ef=$rem*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
}
echo $sum;