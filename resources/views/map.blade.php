<div id="floating-panel">
    <input id="submit_lokasi" type="button" value="Reverse Geocode">
</div>
<script src="http://maps.google.com/maps/api/js"></script>
<div id="map"></div>
<!-- {!! Mapper::render() !!} -->

<script>
    function initMap() 
    {
      getLocation();
    }

    function getLocation() 
    {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(showPosition2, showError);
        }
        else 
        {
            view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
        }

    }

    function showPosition2(position) 
    {
        var lati = position.coords.latitude;
        var longi = position.coords.longitude;
        var map = new google.maps.Map(document.getElementById('map'), 
        {
          zoom: 18,
          center: {lat: lati, lng: longi}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit_lokasi').addEventListener('click', function() 
        {
          geocodeLatLng(geocoder, map, infowindow, lati, longi);
          
        });
    }
 
    function showError(error) 
    {
      switch(error.code)
      {
        case error.PERMISSION_DENIED:
          view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
          break;
        case error.POSITION_UNAVAILABLE:
          view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
          break;
        case error.TIMEOUT:
          view.innerHTML = "Requestnya timeout bro"
          break;
        case error.UNKNOWN_ERROR:
          view.innerHTML = "An unknown error occurred."
          break;
      }
    }

    function geocodeLatLng(geocoder, map, infowindow, lati, longi)
    {
      var latlng = {lat: lati, lng: longi};
      geocoder.geocode({'location': latlng}, function(results, status)
      {
        if (status === 'OK') 
        {
          if (results[1]) 
          {
            map.setZoom(18);
            var marker = new google.maps.Marker({
              position: latlng,
              map: map
            });
            infowindow.setContent(results[0].formatted_address);
            

            infowindow.open(map, marker);
<<<<<<< HEAD
            var alamat_len=results[0].address_components.length;
            console.log(results[0].address_components[0].short_name);
            var alamat_=""
=======
<<<<<<< Updated upstream
            
=======
            var alamat_len=results[0].address_components.length;
            console.log(results[0].address_components[0].short_name);
            var alamat_=""
>>>>>>> Stashed changes
>>>>>>> 2ce983c2c319ae9ad7c1c7b2cbffcdba7b32e6a7
            for (var i=0;i<alamat_len-2;i+=1){
              if (i==alamat_len-3)
                  alamat_+=results[0].address_components[i].short_name
              else    
                  alamat_+=results[0].address_components[i].short_name+", "
            }
<<<<<<< HEAD
            console.log(alamat_);
            console.log(typeof alamat_);
            $('#lokasi').val(alamat_);
            $('#lokasi2').append(alamat_);
=======
<<<<<<< Updated upstream
=======
            $('#lokasi').val(alamat_);
>>>>>>> Stashed changes
>>>>>>> 2ce983c2c319ae9ad7c1c7b2cbffcdba7b32e6a7
          } 
          else 
          {
            window.alert('No results found');
          }
        } 
        else 
        {
          window.alert('Geocoder failed due to: ' + status);
        }
      });
    }
    
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZ_EO7i_GnSTbyGarNz8g1c6JqlXcho4&callback=initMap">
    </script>