<?php
	session_start();
	$error = "";
		if(isset($_POST["userLoginSubmit"])){
			if(empty($_POST["userEmailid"]) || empty($_POST["userPassword"])){
				$error ="username or password is invalid";
			}
			else{
		$username = $_POST["userEmailid"]; // user information...
		$userpassword = $_POST["userPassword"];// password information...
		
		include_once './Development/commonfiles/connection.php';
		//protection against sql injection
		$username = stripslashes($username);
		$userpassword = stripslashes($userpassword);
		$username = mysql_real_escape_string($username);
		$userpassword = mysql_real_escape_string($userpassword);
		//---------------------------------------------------
		$query = "SELECT *FROM `tblloginmst` WHERE `username`='$username' AND `user_password` = '$userpassword'";
		//the below code for the session management...
		$result = mysqli_query($conn, $query);	
			if (mysqli_num_rows($result) == 1) {	
					$_SESSION["login_user"] = $username;// seeting the session
					//setting the cookies below.....
					if(isset($_POST["rememberme"])){
						if(!isset($_COOKIE['auth_username']) || $_COOKIE['auth_password']){
						/*seeting the cookies for the last one year...*/
						setcookie("auth_username",$username, time()+60*60*24*365);
						setcookie("auth_password",md5($userpassword),time()+60*60*24*365);
						//echo "cookie is seeting up";
						}
					}
					else{
						setcookie("auth_username",$username,FALSE);
						setcookie("auth_password",md5($userpassword),FALSE);		
					//echo $_COOKIE['auth_username'];
					}
					//setting the cookies end...
					header("location: user_profile.php");
				}
			else{
				echo  "username or password is invalid";
			}
		//	$var =  $_COOKIE['auth_username'];
		//	echo $var;
		// the above code for the session management....
			mysqli_close($conn); 
			}
		}			
?>