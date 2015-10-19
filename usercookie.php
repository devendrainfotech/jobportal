<?php
include_once './Development/commonfiles/connection.php';
$user_name_cookie = $_COOKIE['auth_username'];
$user_pass_cookie = $_COOKIE['auth_password']; // md5 generated key
//echo $user_pass_cookie;
//exit;
$cookie_query = "SELECT `username`,`user_password` FROM `tbljobseekermst` WHERE `username` = '$user_name_cookie'";
$cookie_result = mysqli_query($conn,$cookie_query);
//$cookie_row = mysqli_fetch_assoc($cookie_result);
$cookie_row = mysqli_num_rows($cookie_result);
//-----------------------------------------------------
//$login_user_cookie = $cookie_row['username'];
//$login_pass_cookie = md5($cookie_row['user_password']);
//echo $login_user_cookie;
//echo $login_pass_cookie;
//echo "hello";
//echo $cookie_row;
if($cookie_row !== 1){
	include_once 'logout.php';
	echo "cookie destroyed";
}
else{
	//echo "runs perfectly";
}
?>