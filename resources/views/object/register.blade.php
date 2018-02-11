@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Register object</div>
                    <div class="panel-body">
                        {!! Form::model(['route' =>[''], 'method' => 'POST', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <input id="searchInput" class="controls" type="text" placeholder="Enter a location">
                                <div id="map" ></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                             {!! Form::label('label','Object data', ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('country',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Country', 'id' => 'country', 'readonly']) !!}
                            {!! Form::text('city',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'City', 'id' => 'city', 'readonly']) !!}
                            {!! Form::text('street',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Street', 'id' => 'street', 'readonly']) !!}
                            {!! Form::text('house',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'House', 'id' => 'street_number', 'readonly']) !!}
                            {!! Form::text('lat',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Lat', 'id' => 'lat', 'readonly']) !!}
                            {!! Form::text('lon',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Lon', 'id' => 'lon', 'readonly']) !!}
                            {!! Form::text('postcode',null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Post code', 'id' => 'postal_code', 'readonly']) !!}


                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/googlemapapi.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initMap">
    </script>
@endsection