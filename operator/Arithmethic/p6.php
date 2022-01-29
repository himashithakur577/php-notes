<?php

//wap in php to find rem.using sprintf() operator
// in order to find modulus, in php you have to use Remainder Theorem
// Divident = Divisor * Quoitient + R
//g(x) = f(x)*h(x)+R(x)

$x=readline('Enter the Number : ');
$y=readline('Enter the Number : ');

$Q = $x/$y;


echo $Q;
echo PHP_EOL;


$rem = $x-(floor($Q)*$y);
echo $rem;