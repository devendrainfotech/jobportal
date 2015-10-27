<?php
session_start();
include_once './Development/commonfiles/connection.php';

if(isset($_SESSION['login_user'])){
$usercheck = $_SESSION['login_user']; // checking the session is still exist or not 

$session_query = "SELECT * FROM `tbljobseekermst` WHERE `username` = '$usercheck'";
$session_result = mysqli_query($conn, $session_query);
$session_row = mysqli_fetch_assoc($session_result);// my email id in the session_row variable...

$login_session = $session_row['username'];
$login_id = $session_row['jobseeker_id'];

$_SESSION['Userid']=$login_id;
$_SESSION['Username']=$login_session;
}
if(isset($_SESSION['login_recruiter'])){
	$reccheck = $_SESSION['login_recruiter'];
	$session_query = "SELECT `username`,`recruiterid` FROM `tblrecruitermst` WHERE `username` = '$reccheck'";
	$session_result =mysqli_query($conn, $session_query);
	$session_row = mysqli_fetch_assoc($session_result);
	
	$login_recruiter_session = $session_row['username'];
	$recruiter_id = $session_row['recruiterid'];
	
$_SESSION['recruiter_id']=$recruiter_id;	
	/* some thinng are remaning here....*/
}
// below will close the connection will be lived with the comment....

/*
if(mysqli_fetch_assoc($session_result) > 0){
	$login_session = $session_result['username'];
}*/
//if(!isset($login_session)){// checking the login session variable have a value or not if its NULL so the connection will be cut of from the database... 
//	mysqli_close($conn);
	//header("location: index.php");
	// destroy the session
	//echo "session not found from page usersession.php";
//}
/*if(!isset($login_recruiter_session)){// checking the login session variable have a value or not if its NULL so the connection will be cut of from the database... 
	mysqli_close($conn);
	//header("location: index.php");
	// destroy the session
	//echo "session not found from page usersession.php";
}*/

?>