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

		</style>
	</head>

	<body style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:top; color: #FFFFFF;"> Swachh KGP<br/><br/>
	<br><br>
	<center>
		<h3 id = "user" style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">Welcome <?php echo $name; ?>!</h3>
		<div> All Complaints  and  Status </div><br/> <br/>
		<a href = grievant_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">New Complaint</span>  &nbsp; &nbsp; &nbsp;
		<a href = grievant_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">edit profile</span>  &nbsp; &nbsp; &nbsp;
		<a href = grievant_homepage.php style = "font-family: 'Cabin Sketch'; text-align:left ;font-size: 25px; color: #FFFFFF'">logout</span>
		
	</center>
</html>
