<?php
	include './Development/commonfiles/connection.php';
	include_once './userSession.php';
	if(isset($_POST['userBasicSaveButton'])){
		$userfirstname = $_POST['userFirstName'];
		$userlastname = $_POST['userLastName'];
		$userresumeheadline = $_POST['userResumeHeadline'];
		$userjobskill = $_POST['userJobSkill'];
		$userfunctionalarea = $_POST['userFunctionalArea'];
		$userrole = $_POST['userRole'];
		$userdateofbirth = $_POST['userDateofBirth'];
		//$useremailid = $_POST['userEmailId'];
		$usermobilenumber = $_POST['userMobileNumber'];
		//$userfirstname = $_POST['userGender'];  	
		$useraddress = $_POST['userAddress'];
		$userpincode = $_POST['userPincode'];
		$usercity = $_POST['userCity'];
		
		// make a error handling includeing the empty function....:)
		// role remains
		
			//$query = "INSERT INTO `tbljobseekermst`(`firstname`,`lastname`,`resume_headline`,`key_skill`,`functional_aera`,`role`,`dateofbirth`,`emailid`,`pincode`,`mobilenumber`,`address`,`city`) VALUES ('$userfirstname','$userlastname','$userresumeheadline','$userjobskill','$userfunctionalarea','$userrole','$userdateofbirth','$useremailid','$usermobilenumber','$useraddress','$userpincode','$usercity')";
			$query = "UPDATE `tbljobseekermst` SET `firstname` = '$userfirstname',`lastname` = '$userlastname',`resume_headline` = '$userresumeheadline',`key_skill` = '$userjobskill',`functional_aera` = '$userfunctionalarea',`role` = '$userrole',`dateofbirth` = '$userdateofbirth',`mobilenumber` = '$usermobilenumber',`address` = '$useraddress',`pincode` = '$userpincode',`city` = '$usercity' WHERE `emailid` = '$login_session'";
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
		$userdegree = $_POST['userDegree'];
		$userdegreeuniversity = $_POST['userSpecialization'];
		$userdegreespecialization = $_POST['userUniversity'];
		$userdegreepassing = $_POST['userPassingYear'];
		
		echo $userdegree;
		if($userdegree == 0){
			$query = "UPDATE `jobseekerdetail` SET `sscspec` = '$userdegreespecialization' , `sscuniv` = '$userdegreeuniversity' , `sscpass` = '$userdegreepassing' WHERE `emailid` = '$login_session'";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
			}			
		}
		else if($userdegree == 1){
			$query = "UPDATE `jobseekerdetail` SET `hscspec` = '$userdegreespecialization' , `hscuniv` = '$userdegreeuniversity' , `hscpass` = '$userdegreepassing' WHERE `emailid` = '$login_session'";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
			}
		}
		else if($userdegree == 2){
			$query = "UPDATE `jobseekerdetail` SET `bgspec` = '$userdegreespecialization' , `bguniv` = '$userdegreeuniversity' , `bgpass` = '$userdegreepassing' WHERE `emailid` = '$login_session'";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
			}
		}
		else if($userdegree == 3){
			$query = "UPDATE `jobseekerdetail` SET `pgspec` = '$userdegreespecialization' , `pguniv` = '$userdegreeuniversity' , `pgpass` = '$userdegreepassing' WHERE `emailid` = '$login_session'";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
			}
		}
		else if($userdegree == 4){
			$query = "UPDATE `jobseekerdetail` SET `phdspec` = '$userdegreespecialization' , `phduniv` = '$userdegreeuniversity' , `phdpass` = '$userdegreepassing' WHERE `emailid` = '$login_session'";
			if(mysqli_query($conn, $query)){
				echo "updated";
			}
			else{
				echo mysqli_error($conn);
			}
		}
		else{
			echo "degree not found";	
		}
	}
	// end of the educational information
	if(isset($_POST['userExperienceSaveButton'])){
		$useremployer = $_POST['userEmployer'];
		$usercompany = $_POST['userCompany'];
		$userexperience = $_POST['userExperience'];
		$userdesignation = $_POST['userDesignation'];
		$userjobdescription = $_POST['userJobDescription'];
		
		$query = "UPDATE `jobseekerdetail` SET `employer` = '$useremployer',`company` = '$usercompany',`experience` = '$userexperience',`designation` = '$userdesignation',`job_description` = '$userjobdescription' WHERE `emailid` = '$login_session'";
		if(mysqli_query($conn, $query)){
			echo "updated";
		}
		else{
			echo mysqli_error($conn);
		}
	}
	
	if(isset($_POST['userProjectSaveButton'])){
			$userclient = $_POST['userClient'];
			$userprojecttitle = $_POST['userProjectTitle'];
			$userduration = $_POST['userDuration'];
			$userlocation = $_POST['userLocation'];
			$userprojectdetails = $_POST['userProjectDetails'];
			$userrole = $_POST['userRole'];
			$userskillused = $_POST['userSkillUsed'];
			
		$query = "UPDATE `jobseekerdetail` SET `client` = '$userclient',`project_title` = '$userprojecttitle',`duration` = '$userduration',`location` = '$userlocation',`project_details` = '$userprojectdetails',`role` = '$userrole',`skill_used` = '$userskillused' WHERE `emailid` = '$login_session'";
		if(mysqli_query($conn, $query)){
			echo "updated";
		}
		else{
			echo mysqli_error($conn);
		}
	}
?>