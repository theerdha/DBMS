<html>
	<head>
		<title>New Complaint</title>
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
	<br><br>
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #FFFFFF;">New Complaint</h3>
		<form action = "complaint.php" method = "POST">
			<select name = "Complaint">
			  <option value="Garbage">garbage</option>
			  <option value="Public Nuisance">public_nuisance</option>
			  <option value="Mess related">mess</option>
			</select> </br>
			<input name = "Location" placeholder = "Location">
			<button type = "Cordinates">Get my cordinates</button><br/>
			<button type = "Picture">Upload a picture</button><br/><br/>
			<button type = "submit">Submit</button>
		</form>	
	</center>
</html>
