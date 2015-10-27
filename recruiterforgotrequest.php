<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/connection.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>Recruiter Password Request</title>
<?php
	if(isset($_POST['recSubmitPass'])){
		$recemail = $_POST['recEmailId'];
		$recsecque = $_POST['recSecQuestion'];
		$recanswer = $_POST['recSecurityAnswer'];
		$recnewpass = $_POST['recNewPassword'];
		
		$query = "SELECT username,sec_que,sec_ans FROM tblrecruitermst WHERE username = '$recemail' AND sec_que = '$recsecque' AND sec_ans = '$recanswer'";
		$result = mysqli_query($conn, $query);		
			if(mysqli_num_rows($result) == 1){
				$sqlquery = "UPDATE tblrecruitermst SET password = '$recnewpass' WHERE username = '$recemail'";
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