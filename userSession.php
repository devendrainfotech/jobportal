<?php
session_start();
include_once './Development/commonfiles/connection.php';
if(isset($_SESSION['login_user'])){
$usercheck = $_SESSION['login_user']; // checking the session is still exist or not 
$session_query = "SELECT `username` FROM `tblloginmst` WHERE `username` = '$usercheck'";
$session_result = mysqli_query($conn, $session_query);
$session_row = mysqli_fetch_assoc($session_result);// my email id in the session_row variable...
$login_session = $session_row['username'];
}

if(isset($_SESSION['login_recruiter'])){
	$reccheck = $_SESSION['login_recruiter'];
	$session_query = "SELECT `username` FROM `recruiterlogin` WHERE `username` = '$reccheck'";
	$session_result =mysqli_query($conn, $session_query);
	$session_row = mysqli_fetch_assoc($session_result);
	$login_recruiter_session = $session_row['username'];
}

/*
if(mysqli_fetch_assoc($session_result) > 0){
	$login_session = $session_result['username'];
}*/
if(!isset($login_session)){// checking the login session variable have a value or not if its NULL so the connection will be cut of from the database... 
	mysqli_close($conn);
	//header("location: index.php");
	// destroy the session
	//echo "session not found from page usersession.php";
}
/*if(!isset($login_recruiter_session)){// checking the login session variable have a value or not if its NULL so the connection will be cut of from the database... 
	mysqli_close($conn);
	//header("location: index.php");
	// destroy the session
	//echo "session not found from page usersession.php";
}*/

?>