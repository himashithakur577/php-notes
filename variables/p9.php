<?php

//wapin php toshowthe difference B/W null & UNDEFINED.
$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;

echo PHP_EOL;

printf("the memory x = %d",memory_get_usage($x));
unset($x);

printf("the memory x = %d",memory_get_usage($x));
?>