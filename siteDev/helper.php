<?php
	function myFunction($varName){
		$servername = "dbserver.htoo.0ba90e11-ca2f-49e5-82f7-6f2b1b200e3f.drush.in";
		$username = "pantheon";
		$password = "e8e1abad4d2e41ef8e163f516aee563a";
		$dbname = "pantheon";
		$conn = new mysqli($servername,$username,$password,$dbname,16681);

		if ($conn->connect_error){
			echo "HELP ME";
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO company (company_name) VALUES ('". $varName ."')";
		$conn->query($sql);
		$sql = "UPDATE company SET date_added = NOW() WHERE company_name  = '". $varName."'";
		$conn->query($sql);

		$conn->close();
	}
?>