<?php
//wap to show exit from chaining effect

$x=readline('Enter the no b/w 1 to 9 : ');
switch ($n) {
    case 1:
        echo "case 1 is executing \n";
        goto exit_label;
    case 1:
        echo "case 1 is executing \n"; 
     case 2:
        echo "case 2 is executing \n";
    case 3:
        echo "case 2 is executing \n";
    case 4:
        echo "case 4 is executing \n";
    default :
        echo "default case is executing \n"
}
exit_label:;  //or exit_label