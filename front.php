<!DOCTYPE html>
<html>
  <head>
         <meta name="google-signin-client_id" content="173388628824-5at6dlpg2k3o0i909007psbjgr46d0eg.apps.googleusercontent.com">
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

  </head>
  <body>
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>

  	<button onclick="getLocation()">Try It</button>
  	<button id="save" type="button" v>Save Data</button><br>
  	<button id="Submit" type="button" value="Reverse Geocode">NAME</button>
  	<p id="demo"></p>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw0QqwZ-GYPAZ87Fsu7HlELk2pWvPdud8&callback=initMap">
    </script>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        document.cookie = "email = " + profile.getEmail();
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>

    <script src="index.js">  </script>
    <?php
      if(isset($_COOKIE['lang']) && isset($_COOKIE['lat']) && isset($_COOKIE['email'])) {
        echo $_COOKIE['lat'] . " " . $_COOKIE['lang'] . " " . $_COOKIE['email'];
      }
      else {
        echo "Cookie not set!";
      }
    ?>
  </body>
</html>