<?php

//wap in php to assign the array to variable.

$color[0]='red';
$color[1]='green';
$color[2]='orange';
$color[3]='black';

echo getType($color);
echo PHP_EOL;
print_r($color);


$color[]='RED';
$color[4]='GREEN';
$color[]='ORANGE';
$color[]='BLACK';

echo getType($color);

print_r($color);

$arr = ['Red Lable','Blenders Pride','8PM','8pm black','Bunty and Bubly','turborg','Appie Fiz','black dog'];

print_r($arr);

?>