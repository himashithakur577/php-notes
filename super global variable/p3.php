<?php

//wap in php to check a array is homogenous or hetrogenous
print_r($argv);
function is_homo($array=[])
{
		 $key_type=getType($array[0]);
        //echo $key_type;
	for ($i=0; $i <count($array) ; $i++) { 
		
		// echo gettype($array[$i]);
		// echo PHP_EOL;
		if ($key_type===getType($array[$i])) {
			
		}else{
			return false;
		}
	}
	return true;
	
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,40,"ravi"]));
var_dump(is_homo(["vfgghfh","vgfghf","60"]));

?>