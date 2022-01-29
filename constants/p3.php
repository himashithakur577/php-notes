<?php

//wap in php to show non-case sensitive constant

echo true;
echo PHP_EOL;

echo True;
echo PHP_EOL;

echo TRUE;
echo PHP_EOL;

echo TrUe;
echo PHP_EOL;

var_dump(true==TRUE);
var_dump(true==true);
var_dump(true== TrUe);

 ?>