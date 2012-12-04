<?php
$app_name = 'applicationName';
$api_key = 'e6256f1d838a342155f51d800945c777';

require("isdk.php");  

$app = iSDK::stdCon($app_name, $api_key);
echo "created object!<br/>";

if($app){
	echo "app connected!<br/>"; 
}	
else {
	echo "connection failed!<br/>";
}
?>