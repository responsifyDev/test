<?php
	function initialConnection(){
		$servername = "dbserver.htoo.0ba90e11-ca2f-49e5-82f7-6f2b1b200e3f.drush.in";
		$username = "pantheon";
		$password = "e8e1abad4d2e41ef8e163f516aee563a";
		$dbname = "pantheon";


		$conn = new mysqli($servername,$username,$password,$dbname,16681);

		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT company_name, pub_name FROM company NATURAL JOIN publication";
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				echo "Company: " . $row["company_name"] . " -- Pub Name: " . $row['pub_name'] . "<br>";
			}
		} else{
			echo "0 results";
		}

		$conn->close();
	}
	function myFunction($varName, $varDate){
		$servername = "dbserver.htoo.0ba90e11-ca2f-49e5-82f7-6f2b1b200e3f.drush.in";
		$username = "pantheon";
		$password = "e8e1abad4d2e41ef8e163f516aee563a";
		$dbname = "pantheon";

		$conn = new mysqli($servername,$username,$password,$dbname,16681);

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