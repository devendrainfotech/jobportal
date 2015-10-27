<?php 
	include_once 'userSession.php';
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
	include_once './Development/commonfiles/message_dialogue_box.php';		
?>
<title>Contact Us Verify</title>
<?php	
	if(isset($_POST['contactSubmit'])){
		$firstname = $_POST['contactFirstName'];
		$lastname = $_POST['contactLastName'];
		$mobilenumber = $_POST['contactMobileNumber'];
		$emailaddress = $_POST['contactEmailAddress'];
		$message =  $_POST['contactMessage'];
		
		include_once './Development/commonfiles/connection.php';
		
		$query = "INSERT INTO `contactmst`(`firstname`,`lastname`,`email`,`mobile`,`message`) VALUES('$firstname','$lastname','$emailaddress','$mobilenumber','$message')";
		
		if(mysqli_query($conn, $query)){
			SuccessMessage("Record Added Sucessfully","Record has been added successfully into our databse we will contact you soon");
		}
		else{
			$errormsg = mysqli_error($conn);
			ErrorMessage("Record Not Added",$errormsg);
			//echo"Not Added!!!";
		}
	}
include_once './Development/commonfiles/footer.php';	
?>
<?php 
	include_once './Development/commonfiles/footer.php';
	//include_once './Development/commonfiles/header_login.php';
	//include_once './Development/commonfiles/searchbar.php';
?>