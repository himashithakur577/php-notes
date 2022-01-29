<?php
$x=10;
echo $x;
echo PHP_EOL;

$y='himanshi';
echo $y;
echo PHP_EOL;

$$y=500;
printf("the value of himanshi= %s",$himanshi);

echo PHP_EOL;

$w='_100';
$$w='king';
printf("the value w=%s\n",$w);
printf("the value of  king = $s\n",$$w);
printf("the value of _100 =%s\n",$_100);

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;



echo PHP_EOL;

$student['name']='himanshi';
$student['class']='b.tech';


foreach($student as $key => $value){
    $$key = $value;
    printf("%s : %s\n", $key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;
echo PHP_EOL;
echo 'Without using variable to variable';
echo PHP_EOL;
 
$car['name']='Maruti';
$car['class']='A class';
$car['price']='5.5 Lakhs';

extract($car);

printf("the name of car is : %s\n",$name);
printf("the class of car is : %s\n",$class);
printf("the price of car is : %s\n",$price);





















?>