<?php
include_once 'userSession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>Change Password</title>
<?php
if(isset($_POST['userChangePassword'])){
include_once './Development/commonfiles/connection.php';
	$oldpassword = $_POST['userCurrentPassword'];
	$newPassord = $_POST['userNewPassword'];
	$repeatPassword =$_POST['userNewRepeatPassword'];
	$username = $login_session;
	//echo $username;
	if($newPassord !== $repeatPassword){
		ErrorMessage("Password won't match","Both the Password enterd by the user won't match please go back and try again");	
		//echo "Both the New and Old Password Won't Match!!!";
	}
	else{
	//echo $oldpassword.$newPassord.$repeatPassword;
	$query = "SELECT `username`,`user_password` FROM `tbljobseekermst` WHERE `username` = '$username' AND `user_password` = '$oldpassword'";
	$result = mysqli_query($conn, $query);	
		if(mysqli_num_rows($result) == 1){
			$queryupdate = "UPDATE `tbljobseekermst` SET `user_password` = '$newPassord'";
			mysqli_query($conn, $queryupdate);
			SuccessMessage("Password Changed Succesfully","your password has been changed succesfully please use new password for login yourself now on");
		}
		else{
			ErrorMessage("Current Password Won't Match","Your Default password will be not matched","<br><br>");
		}
}
}
include_once './Development/commonfiles/footer.php';
?>