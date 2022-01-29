<?php

// wap in php to show chaining effect in switch 

$n=readline("Enter the number b/w 1 to 9 : ");
$i='1';
switch($n){
    case 1:
        echo "case ".$i++." is executing \n";
        break;
    case 2:
        echo "case ".$i++." is executing \n";
        return;
    case 3:
        echo "case ".$i++." is executing \n";
        exit;
    case 4:
        echo "case ".$i++." is executing \n";
        goto exit_label;
    case 5:
        echo "case ".$i++." is executing \n";
    case 6:
        echo "case ".$i++." is executing \n";
    case 7:
        echo "case ".$i++." is executing \n";
    case 8:
        echo "case ".$i++." is executing \n";
    case 9:
        echo "case ".$i++." is executing \n";
    default :
        echo "default case is executing";
}

exit_label:
printf("this is executing....");
?>