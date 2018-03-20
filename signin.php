<?php 
	$user_type = $_GET['user_type'];
	// $_GET['failure'];
	$status = "none";
	if($_GET['failure'] == "true"){
		$status = "inline";
	}
	//echo $status;
?>
<html>
	<head>
		<title>Grievant</title>
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
			.right {
				position: relative;
				right: 0px;
				left : 300px;
				padding: 0px;
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
			input[type=password], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			.button {
				background-color: #14d18c; /* Green */
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}

		</style>
	</head>

	<body class = "right" style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/>
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Already Registered?</h3>
		<form action = "login_db.php?user_type=<?php echo $user_type ?>" method = "POST">
			<input type = "text" name = "email" placeholder = "Email"><br>
			<input type = "password" name = "password" type = "password" placeholder = "Password"><br>
			<button class = "button" type = "submit">Submit</button>
			<button class = "button" >Back</button><br/>
		</form>	
		<p style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #15632b;display: <?php echo $status ?>;"> Invalid credentials </p>
	</center>
</html>
