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

<form action="userLoginVerify.php" method="post">
	<input type="email" name="userEmailid" placeholder="enter the username" required=""/><br />
	<input type="password" name="userPassword" placeholder="enter the password" required=""/><br />
	<input type="submit" name="userLoginSubmit" value="Sign In" />
	<span> <?php echo $error; ?></span>
</form>

<?php
	//include_once './Development/forms/register_user.php';
	include_once './Development/commonfiles/footer.php';
?>
