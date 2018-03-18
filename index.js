	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(getLocationName);
	    } else { 
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}
  function getLocationName(position,id){
    var pos = {lat : position.coords.latitude ,lng : position.coords.longitude};
    var geocoder = new google.maps.Geocoder;
    geocoder.geocode({'location': pos}, function(results, status) {
      if (status === 'OK') {
        if (results[1]) { 
          document.getElementById(id).innerHTML = (results[1].formatted_address);
        } else {
          window.alert('No results found');
        }
      } else {
        window.alert('Geocoder failed due to: ' + status);
      }
    });
  }
  function makeCookieAndSave(position){
    document.cookie = "lat = " + position.coords.latitude;
    document.cookie = "lang = " + position.coords.longitude;
    /// SAVE COOKIES INTO FILE // 
  }

  function cleaner(){
    /// FILE STREAM ///
    var latlng = {lat : 12 , lng: 12};
    var email = "buridiaditya@gmail.com";
    var i = 0;
    var geocoder = new google.maps.Geocoder;
    geocoder.geocode({'location': latlng}, function(results, status) {
      if (status === 'OK') {
        if (results[1]) { 
          document.getElementById(id1).innerHTML(results[1].formatted_address);
        } else {
          window.alert('No results found');
        }
      } else {
        window.alert('Geocoder failed due to: ' + status);
      }
    });
    document.getElementById('id'+(i+1).toString()).addEventListener('click', function() {
          onClickCleaner(latlng,email);
        });
  }
  
  function onClickCleaner(uluru,email){
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
    var geocoder = new google.maps.Geocoder;
    var infowindow = new google.maps.InfoWindow;
    geocoder.geocode({'location': uluru}, function(results, status) {
        if (status === 'OK') {
            if (results[1]) { 
              map.setZoom(11);
              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
    document.getElementById('CLEAN SUCCESS').addEventListener('click', function() {
          sendMail(email);
        });
  }