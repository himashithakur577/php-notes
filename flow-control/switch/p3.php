<?php

//wap in php to show odd & even using default case switch

$x=readline("Enter the x value : ");
switch ($x%2) {
    case 0:
        echo "$x is even number";
        break;

    default:
    echo "$x is odd number";
         break;
}