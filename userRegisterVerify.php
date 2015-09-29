<?php
	$useremail =  $_POST["userEmailId"];
	$userpass =  $_POST["userPassword"];
	$usercnfpass =  $_POST["userConfirmPassword"];
	$userstate =  $_POST["userState"];
	$usercity =  $_POST["userCity"];
	$usermbno =  $_POST["userMobileNumber"];
	
	include './Development/commonfiles/connection.php';	
	// echo "$useremail"; ==> for checking purpose....
	function registerValidator($username,$pass,$cnfpass,$mobile){
		include './Development/commonfiles/connection.php';
		$query = "SELECT username FROM tblloginmst WHERE username='$username'";
		$result = mysqli_query($conn,$query);
		
		if (mysqli_num_rows($result) > 0) {
            //return FALSE;
				echo "username already exist please choose another one";
				exit;				
            }else if($pass !== $cnfpass){
			//return FALSE;
				echo "password not matched !!!";
				exit;
			}else if(strlen($mobile) !== 10){
			//return FALSE;
				echo "mobile number must be 10 length digit";
				exit;
			}elseif (strpos($username, "@") === FALSE) {
			//return FALSE;
				echo "invalid email address";
				exit;
			}else{
				return TRUE;
			}
		}
	
	registerValidator($useremail, $userpass, $usercnfpass, $usermbno);
	// validation of the data....
	
	$sqlquery = "INSERT INTO `tblloginmst`(`username`,`user_password`,`user_state`,`user_city`) VALUES ('$useremail','$userpass','$userstate','$usercity')";
	
	if(mysqli_query($conn, $sqlquery)){
		echo "<center><h1> You have Been Registered Sucessfully </h1> </center>";
    	echo "<hr>";
    	echo "<center><h3><a href ='http://www.jobportal.me.ht/'>Click here</a> to Login Yourself :)</h3></center>";
		} else {
    	echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
		}
	
?>