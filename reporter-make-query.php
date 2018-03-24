<html>
	<head>
		<meta name="google-signin-client_id" content="173388628824-5at6dlpg2k3o0i909007psbjgr46d0eg.apps.googleusercontent.com">
		<title>Report</title>
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
		</style>
	</head>
	<body style = "font-family: 'Nixie One'; font-size: 70px; color: #FFFFFF;"> 
		Report a site to be cleaned.. <br/><br/>
		<script>
			function onSuccess(googleUser) {
		      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
		      var profile = googleUser.getBasicProfile();
		      console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		      console.log('Name: ' + profile.getName());
		      console.log('Image URL: ' + profile.getImageUrl());
		      console.log('Email: ' + profile.getEmail());
		      document.cookie = "email = " + profile.getEmail();
		    }
			function nextPage() {
			    if (navigator.geolocation) {
			        navigator.geolocation.getCurrentPosition(saveCookie);
			    }
			    window.location = "http://localhost:8080/reporter-take-photo.php";
			}
			function saveCookie(position) {
				document.cookie = "lat = " + position.coords.latitude;
				document.cookie = "long = " + position.coords.longitude;
			}
			function renderButton() {
		      gapi.signin2.render('my-signin2', {
		        'scope': 'profile email',
		        'width': 240,
		        'height': 50,
		        'longtitle': true,
		        'theme': 'dark',
		        'onsuccess': onSuccess
		      });
		    }
		    function signOut() {
			    var auth2 = gapi.auth2.getAuthInstance();
			    auth2.signOut().then(function () {
			      console.log('User signed out.');
			    });
			    window.location = "http://localhost:8080";
			}

		</script>
		<span style = "font-family: 'Cabin Sketch'; font-size: 100px; color: #FFFFFF'" onclick = "nextPage();">Click Here</span>
		<br/>else <br/>
		<span style = "font-family: 'Cabin Sketch'; font-size: 100px; color: #FFFFFF'" onclick = "signOut();">Sign out</span>
		<div id="my-signin2" style = "word-spacing: 0px;" class = "center" hidden = "true"></div>
		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

	</body>
</html>