<?php

//wap in php to convert Array of object to asseciative Array

$json = file_get_contents(__DIR__.'/student.json');
$student_Array = json_decode($json,true);
$students = $student_Array['data'];