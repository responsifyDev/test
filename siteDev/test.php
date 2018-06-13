<?php
	function halp(){
		$servername = "dbserver.dev.c34902fe-4f3b-4299-957b-1310e0d392e7.drush.in";
		$username = "pantheon";
		$password = "4f4db03a6f164837ab954a3f6aa62fa1";
		$dbname = "sandbox";


		$conn = new mysqli($servername,$username,$password,$dbname,15333);

		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}


		$sql = "SELECT campaign_name FROM campaign";
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			echo "<select id=newPhoneWhoDis>";
			echo "<option value='-1'>Choose an option...</option>";
			while ($row = $result->fetch_assoc()){
				echo "<option>" . $row['campaign_name'] ."</option>";
			}
			echo "</select>";
		} else{
			echo "0 results";
		}

		$conn->close();
	}
?>