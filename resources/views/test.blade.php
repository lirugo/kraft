@extends('layouts.app')
@section('content')
<div id="locationField">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
        <input id="autocomplete_city" placeholder="Enter your city" class="form-control" type="text"/>
        </div>
        <div class="col-md-6">
        <input id="autocomplete_street" placeholder="Enter your street" class="form-control" type="text"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <input id="city" placeholder="City" class="form-control" onchange="city()" type="text"/>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function city(){
        // $.getJSON('https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Киев&types=(cities)&key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g',function(data){
        //     console.log(data);
        // });
        alert('as');
        $.ajax({
            dataType: "json",
            type: "post",
            url: 'https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Киев&types=(cities)&key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g',
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            {{--jsonp: false,--}}
            {{--jsonpCallback: "callback",--}}
            {{--data: {--}}
                {{--'input':'Киев',--}}
                {{--'types':'(cities)',--}}
                {{--'key':'AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g',--}}
                {{--'callback':"{{{ csrf_token() }}}"--}}
                {{--},--}}
            success: function (data) { console.log(data);

            }
        });
    }

    var input_street;
    function initAutocomplete() {
        //City
        var input_city = document.getElementById('autocomplete_city');
        var options_city = {
            types: ['(cities)'],
            componentRestrictions: {country: "ua"}
        };
        var autocomplete_city = new google.maps.places.Autocomplete(input_city, options_city);
        var place_city = autocomplete_city.getPlace();
        google.maps.event.addListener(autocomplete_city, 'place_changed', function () {
            var place = autocomplete_city.getPlace();
            // console.log(place.address_components[0].long_name);
            document.getElementById("autocomplete_city").value = place.address_components[0].long_name;
        });

        //Street
        input_street = document.getElementById('autocomplete_street');
        var options_street = {
            types: ['address'],
            componentRestrictions: {country: "ua"}
        };
        var autocomplete_street = new google.maps.places.Autocomplete(input_street, options_street);
        var place_street = autocomplete_street.getPlace();
        google.maps.event.addListener(autocomplete_street, 'place_changed', function () {
            input_street.value = "Киев, "+input_street.value;
            var place = autocomplete_street.getPlace();
             // console.log(place.address_components[0].long_name);console.log(input_street.value);
            document.getElementById("autocomplete_street").value = place.address_components[0].long_name;
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initAutocomplete"
        async defer></script>

    @endsection