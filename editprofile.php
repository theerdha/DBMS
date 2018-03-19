<?php 
	$name = $_GET['name'];
?>
<html>
	<head>
		<title>grievant homepage</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(bg.jpg) no-repeat center center fixed;
  					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover;
  					background-size: cover;
				}
			html, body {
    			height: 100%;
			}
			html {
    			display: table;
    			margin: auto;
			}
			body {
				text-align: center;
    			display: table-cell;
    			vertical-align: middle;
			}

			a:link, a:visited {
				color: white;
				text-decoration: none;
				
			}
			div {
				width: 600px;
				padding: 20px;
				border: 5px solid gray;
				margin: 0;
			}
			
			input[type=text], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			input[type=submit] {
				width: 100%;
				background-color: white;
				color: black;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #FFFFFF;"> Swachh KGP<br/><br/>
	<center>
		<h3 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">Edit your profile!<?php echo $name; ?>!</h3>
		<div> 
		<form action = "edit_griev_db.php" method = "POST">
			<input type="text" name = "name" placeholder = "Name"><br>
			<input type="text" name = "email" placeholder = "Email"><br>
			<input type="text" name = "aadhaar" placeholder = "Aadhaar"><br>
			<input type="text" name = "DOB" placeholder = "DOB"><br>
			<input type="text" name = "age" placeholder = "Age"><br>
			<input type="text" name = "Housenumber" placeholder = "Housenumber"><br>
			<input type="text" name = "Location" placeholder = "Location"><br>
			<input type="text" name = "password" type = "password" placeholder = "Password"><br>
			<button type="text" type = "submit">Submit</button>
			<button>Back</button><br/>
		</form>	

		</div><br/>
		
		
	</center>
</html>
