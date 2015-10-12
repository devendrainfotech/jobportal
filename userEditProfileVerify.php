<?php
	include './Development/commonfiles/connection.php';
	
	if(isset($_POST['userBasicSaveButton'])){
		$userfirstname = $_POST['userFirstName'];
		$userlastname = $_POST['userLastName'];
		$userresumeheadline = $_POST['userResumeHeadline'];
		$userjobskill = $_POST['userJobSkill'];
		$userfunctionalarea = $_POST['userFunctionalArea'];
		$userrole = $_POST['userRole'];
		$userdateofbirth = $_POST['userDateofBirth'];
		$useremailid = $_POST['userEmailId'];
		$usermobilenumber = $_POST['userMobileNumber'];
		//$userfirstname = $_POST['userGender'];  	
		$useraddress = $_POST['userAddress'];
		$userpincode = $_POST['userPincode'];
		$usercity = $_POST['userCity'];
		
		// make a error handling includeing the empty function....:)
		// role remains
		
			$query = "INSERT INTO `tbljobseekermst`(`firstname`,`lastname`,`resume_headline`,`key_skill`,`functional_aera`,`role`,`dateofbirth`,`emailid`,`pincode`,`mobilenumber`,`address`,`city`) VALUES ('$userfirstname','$userlastname','$userresumeheadline','$userjobskill','$userfunctionalarea','$userrole','$userdateofbirth','$useremailid','$usermobilenumber','$useraddress','$userpincode','$usercity')";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
				echo "not";
			}
	}
// end of the basic information.....
	if(isset($_POST['userEducationSaveButton'])){
		
		
	}
?>