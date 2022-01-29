<?php

//boolean datatypes stored in variable

$x=true;
echo $x;
echo PHP_EOL;

echo getType($x);
 echo PHP_EOL;
var_dump($x);



$y=True;
echo $y;
echo PHP_EOL;

echo getType($y);
 echo PHP_EOL;
var_dump($y);


$z=TRUE;
echo $z;
echo PHP_EOL;

echo getType($z);
 echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
echo 'on comparing all the three values';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;

echo PHP_EOL;
echo (true==True);
echo PHP_EOL;
echo(1==true);
echo PHP_EOL;
var_dump(1===TRUE);
echo PHP_EOL;


?>