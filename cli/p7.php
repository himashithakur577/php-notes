<?php
$no1 = readline('Enter the no1: ');
$no2 = readline('Enter the no2: ');

#echo add($no1,$no2);

#echo add();

function add($no1=0,$no2=0)
{

return $no1+$no2;

}
printf("the result with 0 argument= %d\n",add());
printf("the result with 1 argument= %d\n",add($no1));
printf("the result with 1 argument= %d\n",add($no2));
printf("the result with 2 argument= %d\n",add($no1,$no2));

?>