<div id="locationField">
    {{ csrf_field() }}
    <input id="autocomplete_city" placeholder="Enter your city" type="text"/>
    <input id="autocomplete_street" placeholder="Enter your street" type="text"/>
</div>

<script>

    function initAutocomplete() {
        //City
        var input_city = document.getElementById('autocomplete_city');
        var options_city = {
            types: ['(cities)']
        };
        var autocomplete_city = new google.maps.places.Autocomplete(input_city, options_city);
        var place_city = autocomplete_city.getPlace();
        google.maps.event.addListener(autocomplete_city, 'place_changed', function () {
            var place = autocomplete_city.getPlace();
            // console.log(place.address_components[0].long_name);
            document.getElementById("autocomplete_city").value = place.address_components[0].long_name;
        });

        //Street
        var input_street = document.getElementById('autocomplete_street');
        var options_street = {
            types: ['geocode']
        };
        var autocomplete_street = new google.maps.places.Autocomplete(input_street, options_street);
        var place_street = autocomplete_street.getPlace();
        google.maps.event.addListener(autocomplete_street, 'place_changed', function () {
            var place = autocomplete_street.getPlace();
             // console.log(place.address_components[0].long_name);
            document.getElementById("autocomplete_street").value = place.address_components[0].long_name;
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initAutocomplete"
        async defer></script>