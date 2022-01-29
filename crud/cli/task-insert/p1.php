// connect database
include __DIR__.'/dbconnect.php';

// prepare query
$stname=readline("Enter your name : ");
$fathername=readline("Enter your father's name : ");
$course=readline("Enter your course : ");
$branch=readline("Enter your branch : ");
$email=readline("Enter your email : ");
$mobileno=readline("Enter your mobile no. : ");
$age=readline("Enter your age : ");
$addres=readline("Enter your address : ");
$mothername=readline("Enter your mother's name : ");

$sql = "INSERT INTO studentinfo(stname,fathername,course,branch,email,mobileno,age,addres,mothername) values('{$stname}','{$fathername}','{$course}','{$branch}','{$email}','{$mobileno}','{$age}','{$addres}','{$mothername}');";

if(mysqli_query($conn,$sql)){

    echo 'Record Inserted with pk = '.mysqli_insert_id($conn);
    
    }else{
    
    echo 'Inserted Error'.mysqli_error($conn);
    }