<?php
//supress operator @: supress operator or Notice Opress : error Operator
// Never use @ Operator because debugging is important.

$x=20;
echo "the value of x : $x";

echo PHP_EOL;
echo "the value of y :".@$y;  //undefined variable y
$z=55;
$z=isset($z)?$z:null;
echo PHP_EOL;
//echo "the value of z :".$z;   //undefined variable z
var_dump($z);

$z=isset($z)??null;
echo PHP_EOL;
echo "the value of z using nullcoalescing  :".$z;   //undefined variable z
var_dump($z);

$p=5>2??null;
echo PHP_EOL;
var_dump($p);
if ($p) {
    echo "p if running by nullcoalescing";
}else{
    echo "p else running by nullcoalecing";
}


$p=5>2?'':null;
echo PHP_EOL;
var_dump($p);
if ($p) {
    echo "p if running by turnery";
}else{
    echo "p else running by turnery";
}

$p=5<2??null;
echo PHP_EOL;
var_dump($p);
if ($p) {
    echo "p if running by nullcoalescing";
}else{
    echo "p else running by nullcoalecing";
}

echo PHP_EOL;
$p=5<2?'':null;
echo PHP_EOL;
var_dump($p);
if ($p) {
    echo " p if running by turnery";
}else{
    echo "p else running by turnery";
}

