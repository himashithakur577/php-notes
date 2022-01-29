<?php  

//wap in php to show re-declaration error in constant

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY',9.8);
echo GRAVITY; //undefined constant GRAVITY

//re-defined

define('gravity',9.7);
echo gravity;

echo PHP_EOL;
printf("the value of predefined constant true : %d\n",TRUE);
define('TRUE','yes');
printf("the value of predefined constant true :%d\n",TRUE);

printf("the value of userdefined constant gravity : %d\n",gravity);
define('gravity',9.0);
printf("the value of useerdefined constant gravity :%d\n",gravity);



?>