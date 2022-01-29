<?php 
    //session_start();
    include __DIR__.'/dbconnect.php';
    
    $sql = "INSERT INTO emp(name,email) values('{$name}','{$email}');";
    mysqli_select_db($conn, 'app2021');

    $name = $_GET['name'];
    $email = $_GET['email'];
    if(mysqli_query($conn,$sql)){
    
        echo 'Record Inserted with pk = '.mysqli_insert_id($conn);
        
        }else{
        
        echo 'Inserted Error'.mysqli_error($conn);
        }
?>