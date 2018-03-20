<?php 
	$user_type = $_GET['user_type'];
	//echo $_GET['failure'];
	$status = "none";
	$status_1 = "none";
	$status_2 = "inline";
	if($_GET['state'] == 1){
		$status = "inline";
	}
	if($_GET['state'] == 2){
		$status_1 = "inline";
		$status_2 = "none";
	}
	//echo $status;
?>
<html>
	<head>
		<title>Respondent</title>
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
			input[type=password], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

		</style>
	</head>

	<body class = "right"  style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color:  #15632b;"> Swachh KGP
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;display: <?php echo $status_2 ?>;">Already Registered?</h3>
		<p style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #15632b;display: <?php echo $status_1 ?>;
		"> Succesfully Registered! </p>		
		<form action = "login_db.php?user_type=<?php echo $user_type ?>" method = "POST">
			<input type = "text" name = "email" placeholder = "Email"><br>
			<input type = "password" name = "password" type = "password" placeholder = "Password">
			<button class = "button" type = "submit">Submit</button>
			<button class = "button">Back</button>
		</form>
		<a href = "signup.php?state=0&user_type=<?php echo $user_type ?>" style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #15632b'">not a registered user?</span><br>
		<p style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #15632b;display: <?php echo $status ?>;"> Invalid credentials </p>
	</center>
</html>
