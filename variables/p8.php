<?php

//wap in php to show nullable datatype.

$x=null; //it does not exist at all

echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));

var_dump(empty($x));

var_dump($x==null);
var_dump($x===null);

var_dump(''===null);
var_dump(''==null);

echo 'very very important';
echo PHP_EOL;
$y='';

var_dump($y);
var_dump(isset($y));
var_dump(isset($w));
var_dump(empty($x));
var_dump(isset($x));


var_dump($w); //null--> no memory.

var_dump($x);