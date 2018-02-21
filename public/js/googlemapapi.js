function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 50.4501, lng: 30.523400000000038},
        zoom: 13,
        disableDefaultUI: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        },
        draggableCursor:'crosshair',
        draggingCursor: 'move'
    });
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });
    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }

        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
        alert(place.address_components[3].long_name);
        //Location details
        for (var i = 0; i < place.address_components.length; i++) {
            if(place.address_components[i].types[0] == 'postal_code'){
                document.getElementById('postal_code').value = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'country'){
                document.getElementById('country').value = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'locality'){
                document.getElementById('city').value = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'route'){
                document.getElementById('street').value = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'street_number'){
                document.getElementById('street_number').value = place.address_components[i].long_name;
            }
        }

        // document.getElementById('location').innerHTML = place.formatted_address;
        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('lon').value = place.geometry.location.lng();

       // document.getElementById('place_id').value = place.place_id;

    });
    // Select place by click

    map.addListener('click', function(e) {
        infowindow.close();
        placeMarker(e.latLng, map);
         geocoder = new google.maps.Geocoder;
         infowindow = new google.maps.InfoWindow;

        geocodeLatLng(geocoder, map, infowindow);
    });
}
var marker;
var place;
var geocoder;
var infowindow;

function placeMarker(position, map) {

    if ( marker ) {
        marker.setPosition(position);
    } else {
        marker = new google.maps.Marker({
            position: position,
            map: map,
        });

    }
}

function geocodeLatLng(geocoder, map, infowindow) {
    var input = marker.getPosition().lat() + ',' + marker.getPosition().lng();
    var latlngStr = input.split(',', 2);

    var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};

    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === 'OK') {
            if (results[1]) {
                placeMarker(input, map);

                infowindow.setContent(results[0].formatted_address);
                infowindow.open(map, marker);

                //Parse data address
                var place = results[0];
                for (var i = 0; i < place.address_components.length; i++) {
                    if(place.address_components[i].types[0] == 'postal_code'){
                        document.getElementById('postal_code').value = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types[0] == 'country'){
                        document.getElementById('country').value = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types[0] == 'locality'){
                        document.getElementById('city').value = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types[0] == 'route'){
                        document.getElementById('street').value = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types[0] == 'street_number'){
                        document.getElementById('street_number').value = place.address_components[i].long_name;
                    }
                }
                document.getElementById('lat').value = place.geometry.location.lat();
                document.getElementById('lon').value = place.geometry.location.lng();
                //Parse data address
                infowindow.open(map, marker);
            }else {
                window.alert('No results found');
            }
        }
        else {
            window.alert('Geocoder failed due to: ' + status);
        }

    });

}

