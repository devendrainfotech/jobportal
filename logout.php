<?php
session_start();
	setcookie("auth_username",'',time()-60*60*24*365);
	setcookie("auth_password",'',time()-60*60*24*365);
if(session_destroy()) // Destroying All Sessions
{
header("Location: recruiter_registration.php"); // Redirecting To Home Page
}
?>