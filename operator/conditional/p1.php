<?php

//wap in php to show example of if & else

$a=readline('Enter a value : ');

if($a>2){$x='hi';}else{$x='hello';}

echo "the value of x using if-else $x\n";

$x=($a>2)?'hii':'hello';

echo "the value of x using ternary $x R TO L\n";

($a>2)?$x='hii':$x='hello';

echo "the value of x using ternary $x L TO R\n";

?>