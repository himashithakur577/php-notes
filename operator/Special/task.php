<?php

//wap in php to make userdefine str_repeat function which, repeat the string N no of timnes

function string_repeat($name='',$x=0)
{
    if($x==0){
        return $name;
    }
    $n='';
    for ($i=0; $i<$x; $i++)
    {
        $n.=$name;
    }
    return $n;
    
}
$a=readline('Enter a string : ');
$x=readline('How many time to be repeated : ');
echo string_repeat($a,$x);

?>