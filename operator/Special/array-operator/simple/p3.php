<?php 

//wap in php to show + operation in array with duplicate subscript

$x=[10,20,30,'himanshi'];

$y[4]=100;
$y[5]=100;
$y[6]=100;
$y[7]=100;

echo "the count of x ".count($x);
echo PHP_EOL;

echo "the count of y ".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x+$y);  //unique
print_r($y+$x);  //unique
var_dump(($x+$y)==($y+$x));   //equal
var_dump(($x+$y)===($y+$x));  //equal Not Identical
var_dump(($x+$y)===($x+$y));  //equal and Identical
var_dump(($y+$x)===($y+$x));  //equal and Identical

?>