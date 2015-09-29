<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Get Recruit Yourself</title>
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link type="text/css" href="Design/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
		<link type="text/css" href="Design/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/style.css" rel="stylesheet"/>
		
		<script type="text/javascript" src="Design/Jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="Design/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<?php include_once './Development/commonfiles/header.php'; ?>
	<div class="container main">

<?php
	include_once './Development/commonfiles/Connectivity.php';
	include_once './Development/commonfiles/Main.php';

	if( !isset($_COOKIE["UserId"]) ){
		if( isset($_POST["txtEmailId"]) && isset($_POST["txtPassword"])){
			$userEmailId = $_POST["txtEmailId"];
			$password = $_POST["txtPassword"];
			echo 'poseted data: <br/>';
			echo $userEmailId . '    ' . $password;
			$con = new Connectivity();
			$main = new Main();
			if( $main->ValidatePassword($password) ){
				$query = "select UserId from UsersDetails where EmailId='".$userEmailId."' and Password='".$password."'";
				echo $query."<br/>";
				$rows = $con->getData($query);
				echo "<br/>" . sizeof($rows) . "<br/>";
				if( sizeof($rows) > 0 ){
					foreach( $rows as $data ){
						foreach( $data as $d ){
							//print_r ($data);
							foreach( $d as $d1 ){
								echo $d1 . "  ";
							}
						}
							echo "<br/>";
					}
					
					setcookie("UserId",$rows[0][0][0]);
					echo $_COOKIE["UserId"];
				}
				else{
					echo "Invalid user name or password !!!!!!!<br/>";
				}
				//while( $rows ){
					//echo $rows[1] . " ====> " . sizeof($rows);				
				//}
			}
			else{
				echo '<br/>Wrong User Name Or Password!';
			}
		}
		else{
			echo "<h1>Wrong data !</h1>";
		}
	}
	else{
		//header('location:index.php');
					echo $_COOKIE["UserId"];
		echo '<br/><center><h2>You are not loged in . <br/>Please <a href="index.php">Login</a>!!<br/><hr/></h2></center>';
	}
?>
</div>
<?php include_once './Development/commonfiles/footer.php'; ?>
 </body>
</html>