<?php
//wap in php to show row strings

echo 'this is a simple Raw string';

echo PHP_EOL;

echo "this is a simple processed string";
echo PHP_EOL;

//Escape Sequence

echo 'this is a \t tabbed \n line';
echo PHP_EOL;
echo "this is a \t tapped \n line";


//with variable;

$name='himanshi';
$class='b.tech';
$roll_no='1001';

echo 'name = $name, class = $class, roll no = $roll_no, inside single code';
echo PHP_EOL;

echo "\n \nname = $name, class = $class, roll no = $roll_no, inside double code\n\n";

?>