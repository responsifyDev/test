<?php
	if (isset($_POST['workflow_name'])){
		echo($_POST['workflow_name']);
		echo($_COOKIE['camp_name']);
	}
?>
<!DOCTYPE html>
<html>
	<head>

		<title>production-responsify</title>

		<!-- Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<!-- Bootstrap 4.0 css CDN -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<!-- Bootstrap 4.0 js CDN -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<!-- Font Awesome -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- Open Iconic -->
		<link href="assets/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

		<style type="text/css">

			body {
				font-family: "Source Sans Pro", sans-serif;
				padding-top: 33px;
			}

			input {
				text-align: center;
			}

			.big {
				border-bottom: 1px solid #f1f1f1;
				margin-left: 15%;
				margin-right: 15%;
				margin-top: 33px;
				margin-bottom: 33px; 
			}

			.xxx {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.form-group {
				padding: 5px;
			}

			#roles {
				display: inline-flex;
				flex-direction: row;
				align-items: flex-end;
			}

			#workflow-stages {
				display: inline-flex;
				flex-direction: row;
				align-items: flex-end;
			}

			.main-title-row{ 
				display: flex;
				align-items: flex-end;
			}

			.add-row {
				padding: 0.63em;
			}

			.oi {
				font-size: 2em;
				color: #999999
			}

		</style>
	</head>
	<body>
		<form method="POST">
		<div class="container xxx" id="create-workflow">
				<hr class="big">
			<h3 id="workflow-title">Create a Workflow</h3>
			<input class="rounded form-control" id="workflow-name" type="text" placeholder="Workflow Name" name="workflow_name">

			<hr class="big">

			<div id="workflow-stages">
				<div class="form-group">
					<span class="oi oi-grid-four-up"></span>
					</div>
					<div class="form-group">
						<label for="stage-name">Stage Name</label>
					  	<input class="rounded form-control" type="text" name="stage-name">
					</div>
					<div class="form-group">
						<label for="stage-name">Stage Task</label>
					  	<input class="rounded form-control" type="text" name="stage-task" placeholder="ex. Outline | Write | Edit">
					</div>
					<div class="form-group">
				  		<label for="sel3">Stage User</label>
					  <select class="form-control" id="sel3">
					    <option>---</option>
					    <option>Writer</option>
					    <option>Editor</option>
					    <option>Strategist</option>
					    <option>Client</option>
					    <option>SEO Specialist</option>
					  </select>
					</div>
					<div class="form-group">
				  		<label for="sel4">Stage Duration</label>
					  <select class="form-control" id="sel4">
					    <option>---</option>
					    <option>1 Day</option>
					    <option>2 Days</option>
					    <option>3 Days</option>
					    <option>4 Days</option>
					    <option>5 Days</option>
					    <option>6 Days</option>
					    <option>1 Week</option>
					  </select>
					</div>
					<div class="form-group">
						<button class="btn btn-dark add-row"><i class="fa fa-plus-circle"></i></button>
					</div>
					
			</div>
			<input class="btn btn-dark" type="submit" id=launch-button value="Launch Workflow">
		</div>
		</div>

			<hr class="big">

			
	</form>
</body>
</html>