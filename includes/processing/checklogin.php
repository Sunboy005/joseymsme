<?php
function check_login()
{
if(strlen($_SESSION['id'])!="")
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.php";		
		$_SESSION["hid"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>