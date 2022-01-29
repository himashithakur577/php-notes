<?php
//wap in php to show global scope defined from local scope

$a=10;
echo "the value of a from global :$a";
echo PHP_EOL;

function display(){

global $a;
//global $b;
$b='himanshi';

echo "the value of global a inside display : $a";
echo PHP_EOL;
echo "the value of global a inside display : $b";
echo PHP_EOL;
}
display();
echo "the value of b from global scope outside : $b";
echo PHP_EOL;
$b=500;

function test1(){
global $a;
global $b;
echo "the value of global a inside test1 : $a";
echo PHP_EOL;
echo "the value of global a inside test1 : $b";
}
test1();