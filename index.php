<?php
include_once 'userLoginVerify.php';// includes the login script

if(isset($_SESSION['login_user'])){
	header("location : profile.php"); // make the homepage of the user and redirect this page to the user side...
}
?>
<?php 
	include_once './Development/commonfiles/header.php';
	//include_once './Development/commonfiles/header_login.php';
	include_once './Development/commonfiles/searchbar.php';
?>
	<title>Get Recruit Yourself</title>
<?php
	//include_once './Development/forms/register_user.php';
	include_once './Development/commonfiles/footer.php';
?>
