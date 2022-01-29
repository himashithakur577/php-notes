<?php

//scanner
function input($msg=''){
if($msg==''){
   exit('message is required');
}
echo $msg;
$input = fgets(STDIN,1024);
return trim($input);
}

?>