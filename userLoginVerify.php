<?php
	session_start();
	include_once './Development/commonfiles/header_temp.php';	
	include_once './Development/commonfiles/message_dialogue_box.php';
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('')
	});
</script>
<?php	
	$error = "";
		if(isset($_POST["userLoginSubmit"])){
			if(empty($_POST["userEmailid"]) || empty($_POST["userPassword"])){
				ErrorMessage("Username or Password is invalid","Maybe you should left one or two fields blanks during the signin please provide all the details to login yourself");	
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
		$query = "SELECT *FROM `tbljobseekermst` WHERE `username`='$username' AND `user_password` = '$userpassword'";
		//the below code for the session management...
		$result = mysqli_query($conn, $query);	     
			if (mysqli_num_rows($result) == 1) {	
                    //$row = mysqli_fetch_assoc($session_result);
                    
					$_SESSION["login_user"] = $username; // seeting the session
					//setting the cookies below.....
					/*if(isset($_POST["rememberme"])){
						if(!isset($_COOKIE['auth_username']) || $_COOKIE['auth_password']){
						//seeting the cookies for the last one year...
						setcookie("auth_username",$username, time()+60*60*24*365);
						setcookie("auth_password",md5($userpassword),time()+60*60*24*365);
						//echo "cookie is seeting up";
						}
					}
					else{
						setcookie("auth_username",$username,FALSE);
						setcookie("auth_password",md5($userpassword),FALSE);		
					//echo $_COOKIE['auth_username'];
					}*/
					//setting the cookies end...
					?>
					<script>window.location = "user_profile.php"; </script>
					<?php
					//header("location:user_profile.php"); ===> it will send the information very fast so the error or warning occured during the next userprofile page...
				}
			else{
				ErrorMessage("Username or Password is invalid","The password or Email id that you entered will be invalid please enter your crendentials again or else if you forgot your password please reset your password by clicking on forgot password from the sign in bar");
				//echo  "username or password is invalid";
			}
		//	$var =  $_COOKIE['auth_username'];
		//	echo $var;
		// the above code for the session management....
			mysqli_close($conn); 
			}
		}
include_once './Development/commonfiles/footer.php';			
?>