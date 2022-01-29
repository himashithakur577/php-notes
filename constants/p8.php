<?php 

//wap in php to show constants are global inside class

define('GRAVITY', 98);    //global

printf("THE VALUE OF GRAVITY IS : %d\n",GRAVITY);

$gravity = 9.8;   
printf("GLOBAL scope value : %s\n",$gravity);


class test 
{	
    private $g;   // instance variable
	private $G;    //instance constant
	
    public 	function __construct()    //php construct
	{
		$this->G = GRAVITY;
		$this->g = $gravity;
		printf("The value of GRAVITY inside method :%d \n",GRAVITY);
		printf("The value of gravity inside method :%d \n",$gravity);

		printf("The value of gravity using g for class :%d\n",$this->g);
		printf("The value of gravity using G for class :%d\n",$this->G);

	}
}
$test = new test();
?>