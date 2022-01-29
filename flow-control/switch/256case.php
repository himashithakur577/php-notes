<?php
$code = "<?php \n\n";
$code .="//wap on php to show only valid 256 cases on switch \n";
$code .='$n=readline("Enter number b/w 1 to 256 :");'."\n";
$code .='switch($n){ '."\n";

for($i=1;$i<255;$i++)
{
	$code .='case '.$i.':'."\n";
	$code .='echo'.'"case '.$i.' is executing \n";'."\n";
}
$code .="default : \n";
$code .='echo '.'"default is running \n";'."\n";
$code .="}";

$fp = fopen("p6.php","w+"); //resourse of file pointer open p6.php in memory with read & write mode.
fwrite($fp,$code);
fclose($fp);