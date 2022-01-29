<?php


//wap in php to show super global values
$a=20;
$b=30;
print_r($GLOBALS);

function display(){
 
  $a='himanshi';
  $b='saurav';
echo "the value of a is : $a";
echo PHP_EOL;

echo "the value of b is : $b";
echo PHP_EOL;

echo "The value of a from global SG : {$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of a from global SG : {$GLOBALS['b']}";
echo PHP_EOL;

$a = $GLOBALS['a'];
$b = $GLOBALS['b'];
echo "the value of a is : $a";
echo PHP_EOL;
echo "the value of b is : $b";
echo PHP_EOL;

global $a, $b;
echo "the value of a is : $a";
echo PHP_EOL;
echo "the value of b is : $b";
echo PHP_EOL;
}

display();

?>