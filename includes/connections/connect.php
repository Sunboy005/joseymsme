<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="msme_db";
 	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
		
	$conn = mysqli_connect($server,$username,$password);
	$dbcon = mysqli_select_db($conn,$database);
	
	if ( !$conn ) {
		die("Connection failed : " . $mysqli->connect_error);
	}
    ?>