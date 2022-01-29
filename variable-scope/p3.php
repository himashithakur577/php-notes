<?php

$a=10;

function display(){

$b=100;
global $a;

echo "the value of global a at local : $a";
echo PHP_EOL;

echo "the value of local b at local : $b";
echo PHP_EOL;

echo "the value of global a at local : $a";
echo PHP_EOL;
 $a=200;


echo "the value of local a at local : $a";
echo PHP_EOL;

}
display();
echo PHP_EOL;
echo "the value of a at global scope is : $a";