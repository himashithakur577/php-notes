<?php

//wap in php to show, floting point number
$x=011; //octal
echo $x;

echo PHP_EOL;

//$a=08;
//echo $a //invalid numeric literal(conversion to octal range not possible)


 $b=10.5;
echo $b;

echo PHP_EOL;

echo getType($b); // double

echo PHP_EOL;

var_dump($b);   // float

echo PHP_EOL;

 $c=10.0;
echo $c;
echo PHP_EOL;
echo getType($c);

echo PHP_EOL;

 $d=10.000;
echo $d;
echo PHP_EOL;
echo getType($d);

echo PHP_EOL;

$x=.5;
echo $x;
echo PHP_EOL;
echo getType($x);

echo PHP_EOL;

$p='a';
$p.=$x;

echo $p;
echo PHP_EOL;
echo getType($p);

echo PHP_EOL;

$marks=9.999999999999999;
echo $marks;
echo PHP_EOL;
ECHO getType($marks);
echo PHP_EOL;
var_dump($marks);

echo PHP_EOL;

$m=9.929999;
echo $m;
echo PHP_EOL;
echo getType($m);
echo PHP_EOL;
var_dump($m);

echo PHP_EOL;

printf("%.2f",$m);








