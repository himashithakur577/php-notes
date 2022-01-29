<?php

//wap in php to show odd & even using switch

$x=readline("Enter the x value : ");
switch (!($x%2==0)) {
    case 0:
        echo "$x is even number";
        break;

    case 1:
            echo "$x is odd number";
            break;
    
    // default:
    //     # code...
    //     break;
}