<?php 

$data = array(
	'name' => 'himanshi',
	'class' =>'b.tech',
	'roll_no' =>101,

);

echo <<<'Form'
<h1>student Form</h1><hr>
<form>
Name<br><input type="text" value="{$data['name']}"><br>
Class<br><input type="text" value="{$data['class']}"><br>
Roll No.<br><input type="text" value="{$data['roll_no']}"><br>
</form>

Form;