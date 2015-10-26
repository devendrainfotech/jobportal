<?php
	if(isset($_POST["userSubmitForm"])){
	$useremail =  $_POST["userEmailId"];
	$userpass =  $_POST["userPassword"];
	$usercnfpass =  $_POST["userConfirmPassword"];
	$userstate =  $_POST["userState"];
	$usercity =  $_POST["userCity"];
	$usermbno =  $_POST["userMobileNumber"];
	}
	include_once './Development/commonfiles/connection.php';
	include_once './Development/commonfiles/header.php';	
	include_once './Development/commonfiles/message_dialogue_box.php';		
	// echo "$useremail"; ==> for checking purpose....
	function registerValidator($username,$pass,$cnfpass,$mobile){
		include './Development/commonfiles/connection.php';
		$query = "SELECT username FROM tbljobseekermst WHERE username='$username'";
		$result = mysqli_query($conn,$query);		
		if (mysqli_num_rows($result) > 0) {
				WarningMessage("Username is Already Exist","The username that you selected is already exist in our database if you already registered you can signup from our home page","you can signin from the JOBPRTAL home page please refer to the header or footer");
				return FALSE;				
            }else if($pass !== $cnfpass){
				ErrorMessage("Password not Matched","Both the Password You inserted on registration time won't match Please enter both password same and try again:)","Goback and Try again");
				return FALSE;
			}else if(strlen($mobile) !== 10){			
				ErrorMessage("Mobile no. is not matched with requirement","Please enter the mobile number to be exactly with the 10 digit number","Goback and Try again");
				return FALSE;
			}elseif (strpos($username, "@") === FALSE) {
				ErrorMessage("Invalid Type Email id","Please enter the email id correctly","go back and try again");
				return FALSE;
			}else{
				return TRUE;
			}
		}	
	if(registerValidator($useremail, $userpass, $usercnfpass, $usermbno) === TRUE){
	// validation of the data....
	$sqlquery = "INSERT INTO `tbljobseekermst`(`username`,`user_password`,`user_state`,`user_city`,`Mobileno`) VALUES ('$useremail','$userpass','$userstate','$usercity','$usermbno')";	
	if(mysqli_query($conn, $sqlquery)){
		SuccessMessage("Registered Sucessfully","You have Been Registered Sucessfully Welcome To the Job Portal Please user Header to signin Yourself","THANK YOU:)");
		echo "<br>";
		} else {
			$error = mysqli_error($conn);
			$errordetail = $sqlquery;
			ErrorMessage("Registration Error",$error,$sqlquery);
		}
	}
	else{
			ErrorMessage("Registration Error","the Error occured dueto above reasons or Some unexpected Failure","Sorry for inconvienience");
	}
include './Development/commonfiles/footer.php';
?>