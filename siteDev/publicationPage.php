<?php
	if (isset($_POST['publication_name'])){
		$varName = $_POST['publication_name'];
		$servername = "dbserver.htoo.0ba90e11-ca2f-49e5-82f7-6f2b1b200e3f.drush.in";
		$username = "pantheon";
		$password = "e8e1abad4d2e41ef8e163f516aee563a";
		$dbname = "pantheon";
		$conn = new mysqli($servername,$username,$password,$dbname,16681);

		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO publication (company_id) SELECT DISTINCT company_id FROM company WHERE company_name = '" . $_COOKIE['comp_name']. "'";
		$result = $conn->query($sql);
		$sql = "UPDATE publication SET pub_name = '" . $varName . "' WHERE pub_id = (SELECT MAX(pub_id)) AND pub_name = ''";
		$result = $conn->query($sql);
		$cookie_name = "pub_name";
		$cookie_value = $_POST['publication_name'];
		setcookie($cookie_name,$cookie_value);
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Please create a new publication!</h1>
	<form method="post">
		Name of Your Publication: <br>
		<input type="text" name="publication_name"><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>