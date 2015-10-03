<?php
	session_start();
	$error = "";
		if(isset($_POST["userLoginSubmit"])){
			if(empty($_POST["userEmailid"]) || empty($_POST["userPassword"])){
				$error ="username or password is invalid";
			}
			else{
		$username = $_POST["userEmailid"];
		$userpassword = $_POST["userPassword"];
		
		include_once './Development/commonfiles/connection.php';
		//protection against sql injection
		$username = stripslashes($username);
		$userpassword = stripslashes($userpassword);
		$username = mysql_real_escape_string($username);
		$userpassword = mysql_real_escape_string($userpassword);

		$query = "SELECT *FROM `tblloginmst` WHERE `username`='$username' AND `user_password` = '$userpassword'";
		$result = mysqli_query($conn, $query);	
			if (mysqli_num_rows($result) == 1) {
					$_SESSION["login_user"] = $username;
					header("location: user_profile.php");
				}
			else{
				$error = "username or password is invalid";
			}
			mysqli_close($conn); 
			}
		}
			
?>