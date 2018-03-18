<html>
	<head>
		<title>Take Photo</title>
	</head>
	<body>
		<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw0QqwZ-GYPAZ87Fsu7HlELk2pWvPdud8&callback=O">
    	</script>
		<?php
			$lat = $_COOKIE["lat"];
			$lang = $_COOKIE["long"];
			$email = $_COOKIE["email"];
			$obj = json_decode(file_get_contents("users.txt"));
			$obj[count($obj)] = $email;
			$obj[count($obj)] = $lat;
			$obj[count($obj)] = $lang;
			file_put_contents("users.txt", json_encode($obj));
		?>
		<script src = "index.js"></script>
		<script>
			function O() {
			    if (navigator.geolocation) {
			        navigator.geolocation.getCurrentPosition(CallBack);
			    } else { 
			        x.innerHTML = "Geolocation is not supported by this browser.";
			    }
			}
			function CallBack(position){
				getLocationName(position,"locationDisplayer");
			}
		</script>
		<span id = "locationDisplayer"> </span>
	</body>
</html>