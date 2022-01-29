<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query


$sql = "DROP TABLE himanshi";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Table deleted';

}else{

echo ' Error'.mysqli_error($conn);
}