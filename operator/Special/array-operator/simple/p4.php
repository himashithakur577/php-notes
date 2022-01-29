<?php 

//wap in php to show + operation in array with duplicate subscript

$x=[10,20,30,40];

$y=[100,200,300,400];

echo "the count of x ".count($x);
echo PHP_EOL;

echo "the count of y ".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x);
print_r($y);
 print_r($x+$y);  
 print_r($y+$x);  
var_dump(($x+$y)==($y+$x));   //equal
var_dump(($x+$y)!=($y+$x)); 
var_dump(($x+$y)==($x));  //not equal
var_dump(($x+$y)===($y+$x));  //equal Not Identical
var_dump(($x+$y)===($x));
// var_dump(($x+$y)===($x+$y));  //equal and Identical
 var_dump(($y+$x)===($y+$x));  //equal and Identical
 var_dump(($y+$x)===($y));
 var_dump(($x+$y)!==($y+$x));

?>