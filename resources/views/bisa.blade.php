<!DOCTYPE html> 
<html> 
<head> 
  <script type="text/javascript"> 
function watchLocation(successCallback, errorCallback) {
  successCallback = successCallback || function(){};
  errorCallback = errorCallback || function(){};

  // Try HTML5-spec geolocation.
  var geolocation = navigator.geolocation;

  if (geolocation) {
    // We have a real geolocation service.
    try {
      function handleSuccess(position) {
        successCallback(position.coords);
      }

      geolocation.watchPosition(handleSuccess, errorCallback, {
        enableHighAccuracy: true,
        maximumAge: 5000 // 5 sec.
      });
    } catch (err) {
      errorCallback();
    }
  } else {
    errorCallback();
  }
}

function init() {
  watchLocation(function(coords) {
    document.getElementById('test').innerHTML = 'coords: ' + coords.latitude + ',' + coords.longitude;
  }, function() {
    document.getElementById('test').innerHTML = 'error';
  });
}
  </script> 
</head> 

<body onload="init()"> 
  <div id="test">Loading...</div> 
</body> 
</html>