<?php

//wap in php to show difference b/w predefined error level & user-defined error level.
error_reporting(E_NOTICE);

printf("the value of true : %d\n",true);
printf("the value of TRUE : %d\n",TRUE);
printf(" True is a incase-sensitive constant : %d\n",(TRUE==1));
define('true',10,1);

printf("the value of true after redeclaration : %d\n",true);


?>