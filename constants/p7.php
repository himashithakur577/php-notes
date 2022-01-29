<?php

//wap in php to show constants are global

printf("******************* START OF GLOBAL SCOPE ****************** \n");
define('NAME','Himanshi');
printf("My Name is %s \n",NAME);

$name='saurav';
printf("NAME is : %s\n",$name);

printf("******************* END OF GLOBAL SCOPE ****************** \n\n\n\n");

function test(){
printf("******************* START OF local SCOPE ****************** \n\n");	
	printf("my name is : %s",NAME);
	printf("NAME IS : %s\n",$name);
printf("******************* END OF local SCOPE ****************** \n");
}
test();
?>