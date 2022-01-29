<?php

// wap in php to show modify operator for negative
$x=10;
$x=$x-1;
echo "the value of x without assignment operator : $x\n";

$x=10;
$x-=1;
echo "the value of x with assignment operator : $x\n";

$x=10;
$z=$x--;
echo "the value of x using post Increment operator : $x and $z\n";

$x=10;
$z=--$x;
echo "the value of x using pre Increment operator : $x and $z\n";
