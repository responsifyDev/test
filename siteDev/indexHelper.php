<?php
	$servername = "dbserver.dev.c34902fe-4f3b-4299-957b-1310e0d392e7.drush.in";
	$username = "pantheon";
	$password = "4f4db03a6f164837ab954a3f6aa62fa1";
	$dbname = "sandbox";

	$conn = new mysqli($servername,$username,$password,$dbname,15333);

	if ($conn->connect_error){
		echo "HELP ME";
		die("Connection failed: " . $conn->connect_error);
	}
	$q = $_REQUEST["q"];
	$sql = "INSERT INTO campaign (campaign_name) VALUES '" . $q . "'";
	echo $sql;
	$conn->query($sql);
	$conn->close();
?>