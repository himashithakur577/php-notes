<?php

//wap in php to string concatination

$x='life ';
$y='partener';

var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y);
var_dump(getType($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(getType($x.$y));

$res= 'the sum is = ';
echo $res.($x+$y);

?>