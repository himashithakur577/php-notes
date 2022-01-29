<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query

$email = readline('Enter email:');
$name = readline('Enter name:');
$username = readline("enter username");

$sql = "INSERT INTO himanshi_singh(name,email,username) values('{$email}','{$name}','$username');";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

