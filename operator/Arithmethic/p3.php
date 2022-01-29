<?php

//wap in php to find rem. without using % operator
// in order to find modulus, in php you have to use Remainder Theorem
// Divident = Divisor * Quoitient + R
//g(x) = f(x)*h(x)+R(x)

$x=readline('Enter the Number : ');
$y=readline('Enter the Number : ');

printf("the division = %d\n",$x/$y);
printf("the division = %f\n",$x/$y);

echo "The division ";
echo PHP_EOL;
$rem1= $x % $y;
echo "rem. using modulo operator = $rem1";
echo PHP_EOL;
$Q = $x/$y;
$rem2 = $x-($Q*$y);
echo "rem. without using modulo operator = $rem2";

//Conclusion :-since Q is completly divided we can never get the answer.