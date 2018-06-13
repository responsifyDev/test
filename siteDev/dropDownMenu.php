<?php include 'connectDB.php';?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.dropbtn {
	    background-color: #3498DB;
	    color: white;
	    padding: 16px;
	    font-size: 16px;
	    border: none;
	    cursor: pointer;
	}
	.dropdown {
	    position: relative;
	    display: inline-block;
	}
	.dropdown-content {
	    display: none;
	    position: absolute;
	    background-color: #f1f1f1;
	    min-width: 160px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    z-index: 1;
	}
	.dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	}
	.show {display:block;}
</style>
</head>
<body>
	<h2>Help me dad</h2>
	<?php initialConnect();?> 
	<h1 id="blah"></h1>
	<script>
		document.getElementById("helpMe").onchange = function(){
			var e = document.getElementById("helpMe");
			var strUser = e.options[e.selectedIndex].text;
			document.getElementById("blah").innerHTML = "You chose: " + strUser + "<br>";
			
		}
	</script>
	<?php halp(strUser);?>
</body>
</html>


