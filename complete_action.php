<?php 
	$id = $_GET['id'];
	$cid = $_GET['cid'];
?>
<html>
	<head>
		<title>Complete action</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(back.jpg) no-repeat center center fixed;
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
			.button {
				background-color: #FFFFFF; /* Green */
				border: none;
				color: black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			input[type=text], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #001;
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
			textarea {
				width: 100%;
				height: 150px;
				padding: 12px 20px;
				box-sizing: border-box;
				border: 1px solid #001;
				border-radius: 4px;
				background-color: #FFFFFF;
				font-size: 16px;
				resize: none;
			}

		</style>
	</head><br/>
	<body style = "font-family:'Cabin Sketch', serif; font-size:70px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/>
		
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">Complaint Report</h3>


		<form action = "complete_backend.php?cid=<?php echo $cid ?>&id=<?php echo $id ?>" method = "POST"  enctype="multipart/form-data">
		
			<textarea name = "Report" placeholder = "Report"></textarea><br/>		
			<input type = "file" name="fileToUpload" id="fileToUpload"><br/>
			<button class = "button" type = "submit">Submit</button>
			<button class = "button" type = "button" onclick="document.location.href='respondent_homepage.php?id=<?php echo $id?>'">Back</a></button><br/>
		</form>	
	</center>
</body>
</html>
