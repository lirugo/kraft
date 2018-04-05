@extends('layouts.app')
@section('content')
@endsection
@section('scripts')
    <script>
        $.ajax({
            dataType: "json",
            url: 'https://maps.googleapis.com/maps/api/geocode/json?',
            // data: {
            //     'address': document.getElementById('city').value+", улица"+document.getElementById('street').value,
            //     'components': 'country:UA|language:ru',
            //     'key':'AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g'
            // },
            success: function (data) {
                // console.log(data.results[0].address_components[0].long_name);
                console.log(data.results[0]);
                console.log(data);
                for(var i=0; i<data.results.length; i++){
                    if(data.results[i].address_components[0].types[0] === "route")
                    {
                        if(streetTags.indexOf(data.results[i].address_components[0].long_name) === -1)
                            streetTags.unshift(data.results[i].address_components[0].long_name);
                        // streetTags.push('a');
                        console.log('a');
                        // $(this).data("uiAutocomplete").search($(this).val());
                    }
                }
                console.log(streetTags);

            }
        });
</script>
@endsection