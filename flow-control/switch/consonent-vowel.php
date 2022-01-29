<?php

//wap in php to show conconent & vowel using default case switch

$x=readline("Enter the character : ");
(gettype($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid value supplied');
$output='';
switch (strtolower($x)) {
    case 'a':
        $output='vowel';
        break;
    
    case 'e':
        $output='vowel';
        break; 
    case 'i':
        $output='vowel';
             break;
             
    case 'o':
        $output='vowel';
            break;
     case 'u':
        $output='vowel';
             break;
    default:
    echo "$x is consonent";
         break;
}
echo $output;