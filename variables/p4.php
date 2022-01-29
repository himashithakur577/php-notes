<?php
// wap in php to show boolean false.

$x=false;
echo $x;  //nothing
echo PHP_EOL;
echo getType($x);  //boolean
echo PHP_EOL;
var_dump ($x);  //bool false 
echo PHP_EOL;
echo json_encode($x); //raw format

echo 'on comparing the values :-';
echo PHP_EOL;
echo (false==False);
echo PHP_EOL;

echo (false==FALSE);
echo PHP_EOL;

var_dump (0==FALSE); //implicit type conversion => due to dynamic nature.

echo PHP_EOL;

var_dump (0==false);
echo PHP_EOL;

var_dump (0===false); //content match & type match = false.


echo PHP_EOL;
printf("string : %s","katreena");
echo PHP_EOL;

printf("string : %d","false");
echo PHP_EOL;

printf("string : %s","true");
echo PHP_EOL;

printf("string : %s",1);
echo PHP_EOL;

printf("string : %s",0);
echo PHP_EOL;

printf("string : %s",json_encode(false));
echo PHP_EOL;

printf("string : %s","");
echo PHP_EOL;

printf("string : %s",false);
echo PHP_EOL;

printf("string : %s",false);
echo PHP_EOL;

printf("string : %b","katreena");
echo PHP_EOL;

printf("string : %d",false);
echo PHP_EOL;






















?>