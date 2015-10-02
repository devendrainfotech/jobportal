<?php
include_once './Development/commonfiles/connection.php';

session_start();

$usercheck = $_SESSION['login_user'];

$session_query = "SELECT `username` FROM `tblloginmst` WHERE `username` = '$usercheck'";

$session_result = mysqli_query($conn, $session_query);

$session_row = mysqli_fetch_assoc($session_result);
$login_session = $session_row['username'];
/*
if(mysqli_fetch_assoc($session_result) > 0){
	$login_session = $session_result['username'];
}*/

if(!isset($login_session)){
	mysqli_close($conn);
	header("location: index.php");
}
?>