<?php
include_once 'userSession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>Change Password</title>
<?php
if(isset($_POST['recChangePassword'])){
include_once './Development/commonfiles/connection.php';
	$oldpassword = $_POST['recCurrentPassword'];
	$newPassord = $_POST['recNewPassword'];
	$repeatPassword =$_POST['recNewRepeatPassword'];
	$username = $login_recruiter_session;
	//echo $login_recruiter_session;
	//echo $username;
	if($newPassord !== $repeatPassword){
		ErrorMessage("Password won't match","Both the Password enterd by the user won't match please go back and try again");	
		//echo "Both the New and Old Password Won't Match!!!";
	}
	else{
	//echo $oldpassword.$newPassord.$repeatPassword;
	$query = "SELECT `username`,`password` FROM `tblrecruitermst` WHERE `username` = '$username' AND `password` = '$oldpassword'";
	$result = mysqli_query($conn, $query);	
		if(mysqli_num_rows($result) == 1){
			$queryupdate = "UPDATE `tblrecruitermst` SET `password` = '$newPassord'";
			if(mysqli_query($conn, $queryupdate)){
			SuccessMessage("Password Changed Succesfully","your password has been changed succesfully please use new password for login yourself now on");
			}
			else{
				$error = mysqli_error($conn);
				ErrorMessage("Error Occured",$error);
			}
		}
		else{
			ErrorMessage("Current Password Won't Match","Your Default password will be not matched","<br><br>");
		}
}
}
include_once './Development/commonfiles/footer.php';
?>