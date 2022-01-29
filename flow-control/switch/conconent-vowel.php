<?php

//wap in php to show conconent & vowel using default case switch

$x=readline("Enter the character : ");
(gettype($x=='string') and strlen($x==1)?:exit('Invalid value supplied'));
switch ($x) {
    case 'a':
        echo "$x is vowel";
        break;
    
    case 'e':
            echo "$x is vowel";
            break; 
    case 'i':
            echo "$x is vowel";
             break;
             
    case 'o':
            echo "$x is vowel";
            break;
     case 'u':
            echo "$x is vowel";
             break;
    default:
    echo "$x is conconent";
         break;
}