<?php
include_once 'userLoginVerify.php';// includes the login script
if(isset($_COOKIE['auth_username']) && isset($_COOKIE['auth_password'])){
	header("location: user_profile.php");
//	echo "from the cookie index page";
}
if(isset($_SESSION['login_user'])){
	header("location: user_profile.php"); // make the homepage of the user and redirect this page to the user side...
//	echo "from the index with session";
	//make the user homepage; and redirect the user to his own homepage...
	//echo"workin!!!";
}
/*else{
	echo "not sended to the profile page";
}*/
?>
<?php 
	include_once './Development/commonfiles/header.php';
	//include_once './Development/commonfiles/header_login.php';
	include_once './Development/commonfiles/searchbar.php';
?>
	<title>Get Recruit Yourself</title>
<!--<form action="userLoginVerify.php" method="post">
	<input type="email" name="userEmailid" placeholder="enter the username" required=""/><br />
	<input type="password" name="userPassword" placeholder="enter the password" required=""/><br />
	<input type="submit" name="userLoginSubmit" value="Sign In" />
	<span> <?php echo $error; ?></span>
</form>-->
<?php
	//include_once './Development/forms/register_user.php';
	include_once './Development/commonfiles/footer.php';
?>
