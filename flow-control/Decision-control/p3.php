<?php

//wap in php to finde odd and even

$n=readline("Enter the number : ");
if($n%2==0){
	echo "$n is even";
	goto out;
}

echo "$n is odd";
out:;