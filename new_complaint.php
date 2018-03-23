<?php 
	$id = $_GET['id'];
?>
<html>
	<head>
		<title>New Complaint</title>
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
	<body style = "font-family:'Cabin Sketch', serif; font-size: 100px; word-spacing: 0px; text-align:top; color: #15632b;"> Swachh KGP<br/>
		<script>
			var lat = document.getElementById("lat");
			var long = document.getElementById("long");
			
			function showPosition(position) {
			    document.getElementById("lat").value = ""+position.coords.latitude;
			    document.getElementById("long").value = ""+position.coords.longitude; 
			    //lat.placeholder = ""+position.coords.latitude;
			    //long.placeholder = ""+position.coords.longitude; 
			}
			function getLocation() {
			    if (navigator.geolocation) {
			        navigator.geolocation.getCurrentPosition(showPosition);
			    } else {
			        lat.innerHTML = "Geolocation is not supported by this browser.";
			        long.innerHTML = "Geolocation is not supported by this browser.";
			    }
			}
		</script>
	<center>
		<h3 style = "font-family:'Cabin Sketch', serif; font-size: 50px; word-spacing: 0px; text-align:center; color: #15632b;">New Complaint</h3>

		<button class="button" onclick="getLocation()">Get my cordinates</button><br/>
		<form action = "complaint_backend.php" method = "POST"  enctype="multipart/form-data">
			<select name = "Complaint">
			  <option value="Garbage">Garbage</option>
			  <option value="Public Nuisance">Public Nuisance</option>
			  <option value="Mess related">Mess</option>
			</select> </br>
			<input type ="text" name = "Location" placeholder = "Location Tag">
			<textarea placeholder = "Report"></textarea><br/>
			<input type="text" name="lat" id="lat" placeholder = "Latitute">
			<input type="text" name="long" id="long" placeholder = "Longitude">
			
			<input type = "file" name="fileToUpload" id="fileToUpload">
			<button class = "button" type = "submit">Submit</button>
		</form>	
	</center>
</body>
</html>
