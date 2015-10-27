<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>Recruiter register Verification</title>
<?php
if(isset($_POST['recruiterRegisterButton'])){
    $recruiteremailid = $_POST['recruiteremailid'];
    $recruiterpassword = $_POST['recruiterpswd'];
    $recruiterconfirm_password = $_POST['recruitercnfpswd'];
    $recruitercompanyname = $_POST['recruitercmpname'];
    $recruitercompanyadd = $_POST['recruitercmpadd'];
    $recruiterstate = $_POST['recruitercmpstate'];
    $recruitercity = $_POST['recruitercmpcity'];
    $recruitermbnumber = $_POST['recruitermblnum'];
	$recruitersecque = $_POST['recruiterSecQuestion'];
	$recruitersecans = $_POST['recruiterSecurityAnswer'];
    //$reccondition = $_POST['reccnd'];
include './Development/commonfiles/connection.php';

function registerValidator($username,$pass,$cnfpass,$mobile,$cmp,$address){
		include './Development/commonfiles/connection.php';
		$query = "SELECT username FROM tblrecruitermst WHERE username='$username'";
		$result = mysqli_query($conn,$query);		
		if (mysqli_num_rows($result) > 0) {
				WarningMessage("Username is Already Exist","The username that you selected is already exist in our database if you already registered you can signup from our home page","you can signin from the Recruiter tab Through home page please refer to the header or footer");
				return FALSE;				
            }else if($pass !== $cnfpass){
			ErrorMessage("Password not Matched","Both the Password You inserted on registration time won't match Please enter both password same and try again:)","Goback and Try again");
			return FALSE;
			}
			else if(strlen($pass) < 8){
			ErrorMessage("password Length","Password Length At least 8 character Long");
				return FALSE;
			}
			else if(strlen($mobile) != 10){
			ErrorMessage("Mobile no. is not matched with requirement","Please enter the mobile number to be exactly with the 10 digit number","Goback and Try again");
				return FALSE;
			}elseif (strpos($username, "@") === FALSE) {
			ErrorMessage("Invalid Type Email id","Please enter the email id correctly","go back and try again");
				return FALSE;
			}
			else if(empty($cmp)){
				ErrorMessage("Company Name is Empty","Please Provide The company name");
				return FALSE;
			}
			else if(strlen($address) <= 10){
				ErrorMessage("Address Error","The address should be at least 10 character long enough");
			}else{
				return TRUE;
			}
		}
if(registerValidator($recruiteremailid, $recruiterpassword, $recruiterconfirm_password, $recruitermbnumber,$recruitercompanyname,$recruitercompanyadd) === TRUE){ 
$sqlquery = "INSERT INTO `tblrecruitermst`(`username`,`password`,`company`,`companyaddress`,`state`,`city`,`mobilenumber`,`sec_que`,`sec_ans`) VALUES ('$recruiteremailid','$recruiterpassword','$recruitercompanyname','$recruitercompanyadd','$recruiterstate','$recruitercity','$recruitermbnumber','$recruitersecque','$recruitersecans')";

if (mysqli_query($conn, $sqlquery)) {
    	SuccessMessage("Registered Sucessfully","You have Been Registered Sucessfully Welcome To the Job Portal Please user Header to signin Yourself","THANK YOU:)");
		echo "<br>";
    } else {
    $error = mysqli_error($conn);
	$errordetail = $sqlquery;
	ErrorMessage("Registration Error",$error,$sqlquery);
}
}
}
include_once './Development/commonfiles/footer.php';
?>