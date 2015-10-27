<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/connection.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>User Forgot Password</title>
<?php
	if(isset($_POST['userSubmitPass'])){
		$useremail = $_POST['userEmailId'];
		$usersecque = $_POST['userSecQuestion'];
		$useranswer = $_POST['userSecurityAnswer'];
		$usernewpass = $_POST['userNewPassword'];
		
		$query = "SELECT username,sec_que,sec_ans FROM tbljobseekermst WHERE username = '$useremail' AND sec_que = '$usersecque' AND sec_ans = '$useranswer'";
		$result = mysqli_query($conn, $query);		
			if(mysqli_num_rows($result) == 1){
				$sqlquery = "UPDATE tbljobseekermst SET user_password = '$usernewpass' WHERE username = '$useremail'";
				if(mysqli_query($conn, $sqlquery)){
					SuccessMessage("Password Sucessfully Changed");
				}
				else{
					ErrorMessage("Error Occured","Wrong details are entered");
				}
			}else{
				ErrorMessage("Password Won't Updated","Wrong details are entered");
			}
	}
?>
<?php
include_once './Development/commonfiles/footer.php';
?>