<?php
	function myFunction($varName, $varDate){
		$servername = "dbserver.dev.c34902fe-4f3b-4299-957b-1310e0d392e7.drush.in";
		$username = "pantheon";
		$password = "4f4db03a6f164837ab954a3f6aa62fa1";
		$dbname = "sandbox";

		$conn = new mysqli($servername,$username,$password,$dbname,15333);

		if ($conn->connect_error){
			echo "HELP ME";
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO campaign (pub_id) SELECT DISTINCT pub_id FROM publication WHERE pub_name = 'Whole Milk'";
		$conn->query($sql);
		$sql = "UPDATE campaign SET campaign_name ='".$varName. "'WHERE campaign_id = (SELECT MAX(campaign_id)) AND campaign_name ='' ";
		$conn->query($sql);
		$varDate = strtotime($varDate);
		$day1 = date('Y-m-d', $varDate);
		//print_r($day_1);
		$sql = "UPDATE campaign SET start_date ='" . $day1 . "' WHERE campaign_name  = '". $varName."'";
		//print_r($sql);
		$conn->query($sql);
	}
?>