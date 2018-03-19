<?php 
	$name = $_GET['name'];
?>
<html>
	<head>
		<title>respondent homepage</title>
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

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #FFFFFF;"> Swachh KGP<br/>
	<center>
		<h3 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">Welcome <?php echo $name; ?>!</h3>
		<p id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">Your current rating is  <?php echo $name; ?><p>
		<div>Complaints with status 0 <button class="button">Take up</button> </div><br/> <br/>
		<a href = respondent_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">View my solved Complaints</span>  &nbsp; &nbsp; &nbsp;
		<a href = respondent_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">edit profile</span>  &nbsp; &nbsp; &nbsp;
		<a href = respondent_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">logout</span>
		
	</center>
</html>
