<?php

$dbserver="localhost";
$dbusername="977993";
$dbpassword="hazard10";
$connect=mysql_connect($dbserver,$dbusername,$dbpassword);
if(!$connect){
	die("could not connect to db".mysql_error());
}


?>