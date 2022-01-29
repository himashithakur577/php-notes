<?php

//wap in php to find rem.using sprintf() operator
// in order to find modulus, in php you have to use Remainder Theorem
// Divident = Divisor * Quoitient + R
//g(x) = f(x)*h(x)+R(x)

$x=readline('Enter the Number : ');
$y=readline('Enter the Number : ');

$Q = $x/$y;
$A=sprintf(" Q = %d \n",$Q);
$B=sprintf(" Q =%f \n", $Q);
$C=sprintf(" Q =%.2f \n",$Q);

echo $A;
echo PHP_EOL;

echo $B;
echo PHP_EOL;

echo $C;
echo PHP_EOL;
$rem = $x-($Q*$y);
echo $rem;