<?php
$connection_localhost = "fdb7.biz.ht";
$connection_user = "1936711_job";
$connection_password = "jobportal123";
$connection_dbname = "1936711_job";
$coonection_port = 3306;

//$conn = mysqli_connect($connection_localhost,$connection_user,$connection_password,$connection_dbname,$connection_port);
// for the local and the onnet connection
$conn = mysqli_connect("localhost","root","","jobportal");

if (!$conn) {
    die("conn failed: " . mysqli_connect_error());
}
else{
//	echo "connected";
}
?>