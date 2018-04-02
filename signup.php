<?php 
	$user_type = $_GET['user_type'];
	$status = "none";
	if($_GET['state'] == 1){
		$status = "inline";
	}
?>
<html>
	<head>
		<title>signup</title>
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
			.center {
    			margin: auto;
			    width: 25%;
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
			.right {
				position: relative;
				right: 0px;
				left : 300px;
				padding: 0px;
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

	<body class = "right" style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP
	<br>
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Signup</h3>
		<form action = "signup_backend.php?user_type=<?php echo $user_type?>" method = "POST">
			<input type = "text" name = "name" placeholder = "Name"><br>
			<input type = "text" name = "email" placeholder = "Email Id"><br>
			<input type = "text" name = "aadhaar" placeholder = "Aadhaar Number"><br>
			<input type = "password" name = "password" type = "password" placeholder = "Password"><br>
			<?php
               if ($user_type == 0) {?>
                  <select name = "Type">
					  <option value="RAG_PICKER">Rag Picker</option>
					  <option value="COUNSELLOR">Counsellor</option>
					  <option value="MESS_WORKER">Mess Manager</option>
				  </select> </br>
              <?php  } ?>
			<button class = "button" type = "submit" >Submit</button>
			<button class = "button" type = "button" onclick="document.location.href='signin_with_signup.php?user_type=<?php echo $user_type?>'">Back</a></button><br/>
		</form>
		<p hidden style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #15632b;display: <?php echo $status ?>;"> User Already exists! </p>
	</center>
</body>
</html>
