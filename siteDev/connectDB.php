<?php
$servername = "dbserver.dev.c34902fe-4f3b-4299-957b-1310e0d392e7.drush.in";
$username = "pantheon";
$password = "4f4db03a6f164837ab954a3f6aa62fa1";
$dbname = "sandbox";


$conn = new mysqli($servername,$username,$password,$dbname,15333);

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
?>
