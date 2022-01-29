<?php

//wap in php to show heredoc string syntax

$a=100;

echo <<<'BLOCK'
this is here doc string, $a \n
        "this is again new line of string "$a" "
'this string is inside "$a" single Qoutes \t 'tabbed' = $a

BLOCK;



//wap in php to show heredoc string syntax

$a=100;

$code=<<<"BLOCK"
this is here doc string, $a \n
        "this is again new line of string "$a" "
'this string is inside "$a" single Qoutes \t 'tabbed' = $a

BLOCK;

echo $code;


?>