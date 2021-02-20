<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("Asia/Karachi");

	$con= mysqli_connect("localhost" , "root" , "" , "HMS");

	if(mysqli_connect_errno()){
		echo "failed to connect" . mysql_connect_errno();
	}

?>