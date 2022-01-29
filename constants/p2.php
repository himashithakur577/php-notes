<?php

//wap in php to show case sensitive constant

define('gravity',10);  //lowercase
define('GRAVITY',9.8);  //UPPERCASE
define('Gravity','Free fall');   //Capatalise
define('GrAvItY','this is gravity');   //MiXeD

echo gravity;
echo PHP_EOL;

echo GRAVITY;
echo PHP_EOL;

echo Gravity;
echo PHP_EOL;

echo GrAvItY;
echo PHP_EOL;



?>