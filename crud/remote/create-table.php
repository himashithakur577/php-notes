<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query


$sql = "CREATE TABLE himanshi_singh(id INT primary key , name VARCHAR(255), email VARCHAR(255))";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Table created';

}else{

echo ' Error'.mysqli_error($conn);
}

