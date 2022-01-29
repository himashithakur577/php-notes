<?php
//wap in php to show Exception Handling

$x=readline("Enter the x value : ");
$y=readline("Enter the y value : ");
$res = 0;
try{
    echo "starting the try block \n";
    if($y==0){
        throw new exception;
    }else{
    $res=$x/$y;
    }
    echo "ending  the try block \n";
}
catch(Exception $e){
    echo "some exception raised... ".$e->getmessage();
    echo "\n";
}
finally{
    echo "this block will be executed... \n";
    echo "the result is = $res";
}