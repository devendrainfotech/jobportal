<?php

	session_start();
	$error = "";
		if(isset($_POST["recruiterLoginSubmit"])){
				
			if(empty($_POST["recruiterEmailid"]) || empty($_POST["recruiterPassword"])){
				$error ="username or password is invalid";
			}
			
			else{
				echo "hi";
		$recruitername = $_POST["recruiterEmailid"]; // user information...
		$recruiterpassword = $_POST["recruiterPassword"];// password information...
		
		include_once './Development/commonfiles/connection.php';
		//protection against sql injection
		$recruitername = stripslashes($recruitername);
		$recruiterpassword = stripslashes($recruiterpassword);
		$recruitername = mysql_real_escape_string($recruitername);
		$recruiterpassword = mysql_real_escape_string($recruiterpassword);
		echo $recruitername;
		//---------------------------------------------------
		$query = "SELECT *FROM `recruiterlogin` WHERE `username`='$recruitername' AND `password` = '$recruiterpassword'";
		//the below code for the session management...
		$result = mysqli_query($conn, $query);	
			if (mysqli_num_rows($result) == 1) {	
					$_SESSION["login_recruiter"] = $recruitername;// seeting the session
					//setting the cookies below.....
					if(isset($_POST["rememberme"])){
						if(!isset($_COOKIE['rec_auth_username']) || $_COOKIE['rec_auth_password']){
						/*seeting the cookies for the last one year...*/
						setcookie("rec_auth_username",$recruitername, time()+60*60*24*365);
						setcookie("rec_auth_password",md5($recruiterpassword),time()+60*60*24*365);
						//echo "cookie is seeting up";
						}
					}
					else{
						setcookie("rec_auth_username",$recruitername,FALSE);
						setcookie("rec_auth_password",md5($recruiterpassword),FALSE);		
					//echo $_COOKIE['auth_username'];
					}
					//setting the cookies end...
					header("location: recruiter_profile.php");
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