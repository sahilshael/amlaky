    getScript();
    var geocoder="";
    function initAutocomplete() {
        geocoder = new google.maps.Geocoder();
        
        var map = new google.maps.Map(document.getElementById('map'), {
          center: default_map_position,
          zoom: 10,
          mapTypeId: 'roadmap'
        });
        var markers = [];

        var icon = {
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        markers = new google.maps.Marker({
          map: map,
          draggable: true,
          //icon: icon,
          title: '',
          position: default_map_position
        });

        var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        google.maps.event.addListener(map, 'click', function(event) {
            markers.setPosition(event.latLng);
            setMapLatLngToInput(event.latLng);
            setAddressToInput(event.latLng);
        });

        markers.addListener('dragend', function(event){
            setMapLatLngToInput(event.latLng);
            setAddressToInput(event.latLng);
        });


        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          if (places.length == 0) {
            return;
          }

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            markers.setPosition(place.geometry.location);
            // alert(place.geometry.location.lat()+", "+place.geometry.location.lng());
            
            /*setting lat longs in input fields @29-march subodh*/
            setMapLatLngToInput(place.geometry.location);
            /*setting lat longs in input fields @29-march subodh end*/

            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
    }

    function setMapLatLngToInput(data){
        $('#map_loc_lat_id').val(data.lat());
        $('#map_loc_lng_id').val(data.lng());
    }

    function setAddressToInput(data){
        geocoder.geocode({
            'latLng': data
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    $('#pac-input').val(results[0].formatted_address);
                }
            }
        });
    }

    function getScript() {
      var s = document.createElement('script');
      
      s.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAmGR3wSSU5xkT2B5UWN4SKBQKDKn5OBVY&libraries=places&callback=initAutocomplete";
      document.body.appendChild(s);
    }