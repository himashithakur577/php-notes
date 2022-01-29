<?php
//wap in php to show prime number or not from range 1 to 100

$n=readline("enter the number : ");
if($n<=100){
	if($n%2==0){
		if($n==2)
			echo "no. is prime";
		else
echo "Number is not prime";
	}	
	else if($n%3==0){
		if($n==3)
			echo "no. is prime";
		else
echo "Number is not prime";
	}
else if($n%5==0){
	if($n==5)
		echo "no. is prime";
	else
echo "Number is not prime";
}
else if($n%7==0){
	if($n==7)
		echo "no. is prime";
	else
echo "Number is not prime";
}
else if($n%11==0){
	if($n==11)
		echo "no. is prime";
	else
echo "Number is not prime";
}else{
echo "no. is prime";
	}
}else{
echo "enter the number less than 100";
}