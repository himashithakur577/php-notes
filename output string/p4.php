<?php

//wap in php to show difference b/w raw and processed in the combination

//escape character sequence

//echo '''';
//echo """";

echo 'The line is \n single tabbed and "\t double" tabbed';
echo PHP_EOL;

echo "The line is \n single tabbled and '\t double' tabbed";

echo PHP_EOL;

//WITH VARIABLE

echo PHP_EOL;
$a=100;
echo 'The value of $a is : "$a" ';
echo PHP_EOL;

echo "the value of \$a is : '$a' ";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

echo PHP_EOL;
echo 'the value of $a is : "'.$a.'"';
echo PHP_EOL;
echo 'the value of $a is : '.$a;
echo PHP_EOL;
echo 'the value of $a is : '."'$a'";
?>