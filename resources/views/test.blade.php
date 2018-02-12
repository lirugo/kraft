
<link href="/css/style.css" rel="stylesheet">



<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: {lat: 40.731, lng: -73.997}
        });

        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit').addEventListener('click', function() {
            geocodeLatLng(geocoder, map, infowindow);
        });
    }

    function geocodeLatLng(geocoder, map, infowindow) {
        var input = document.getElementById('latlng').value;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
                if (results[1]) {
                    map.setZoom(11);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    infowindow.setContent(results[0].formatted_address);

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
                    alert(results[0].address_components[1].long_name);

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

</script>

<body onload="initialize()">
<div id="map" style="width: 320px; height: 480px;"></div>
<div>
    <input id="address" type="textbox" value="Sydney, NSW">
    <input id="latlng" type="textbox" value="50.44775670000001,30.525621799999954">
    <input type="submit" id="submit" value="Encode" onclick="codeAddress()">

    <br>
    <br>
    <br>
    {!! Form::text('country',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.country'), 'id' => 'country', 'readonly']) !!}
    {!! Form::text('city',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.country'), 'id' => 'city', 'readonly']) !!}
    {!! Form::text('street',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.street'), 'id' => 'street', 'readonly']) !!}
    {!! Form::text('house',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.house'), 'id' => 'street_number', 'readonly']) !!}
    {!! Form::text('lat',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lat'), 'id' => 'lat', 'readonly']) !!}
    {!! Form::text('lon',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lon'), 'id' => 'lon', 'readonly']) !!}
    {!! Form::text('postcode',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.postcode'), 'id' => 'postal_code', 'readonly']) !!}
    {!! Form::text('postcode',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.postcode'), 'id' => 'place_id', 'readonly']) !!}
</div>
</body>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initMap">
</script>