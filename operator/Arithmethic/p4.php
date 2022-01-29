<?php

//wap in php to find rem. without using % operator
// in order to find modulus, in php you have to use Remainder Theorem
// Divident = Divisor * Quoitient + R
//g(x) = f(x)*h(x)+R(x)

$x=readline('Enter the Number : ');
$y=readline('Enter the Number : ');


$Q = intval($x/$y);
echo $Q;
$rem2 = $x-($Q*$y);
echo PHP_EOL;
echo  $rem2;

