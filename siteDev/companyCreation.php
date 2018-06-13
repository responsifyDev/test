<?php 
	include 'helper.php';
	if (isset($_POST['company_name'])){
		//print_r($_POST['company_name']);
		$cookie_name = "comp_name";
		$cookie_value = $_POST['company_name'];
		setcookie($cookie_name,$cookie_value);
		myFunction($_POST['company_name']);
		header('Location:publicationPage.php');
	}
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Welcome to Responsify's new Content Management Tool!</h1>
	<form method="post">
		Name of Your Company: <br>
		<input type="text" name="company_name"><br>
		<input type="submit" value="Submit">
	</form>
</body>