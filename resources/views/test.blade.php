@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('main') !!}
@endsection
@section('content')

    <div class="row">
        <div id="locationField" class="col-md-4">
            <select required name="region" class="form-control m-b-10">
                <option value="" disabled selected>Выберите область</option>
                <option value="12">Киевская область</option>
                <option value="11">Житомирская область</option>
                <option value="13">Черниговская область</option>

                <option value="21">Днепропетровская область</option>
                <option value="22">Донецкая область</option>
                <option value="23">Запорожская область</option>
                <option value="24">Луганская область</option>
                <option value="25">Полтавская область</option>
                <option value="26">Сумская область</option>
                <option value="27">Харьковская область</option>

                <option value="31">Винницкая область</option>
                <option value="32">Кропивницкая область</option>
                <option value="33">Николаевская область</option>
                <option value="34">Одесская область</option>
                <option value="35">Херсонская область</option>
                <option value="36">Черкасская область</option>

                <option value="41">Волынская область</option>
                <option value="42">Закарпатская область</option>
                <option value="43">Ивано-Франковская область</option>
                <option value="44">Львовская область</option>
                <option value="45">Ровненская область</option>
                <option value="46">Тернопольская область</option>
                <option value="47">Хмельницкая область</option>
                <option value="48">Черновицкая область</option>
            </select>
            <input id="autocomplete" placeholder="Enter your address" class="form-control" onFocus="geolocate()" type="text"/>
            <h5 class="">Номер дома</h5>
            <input class="field form-control" id="street_number" disabled="true" />

            <h5 class="">Улица</h5>
            <input class="field form-control" id="route" disabled="true"/>

            <h5 class="">Город</h5>
            <input class="field form-control" id="locality" disabled="true"/>

            <input class="field form-control" id="administrative_area_level_1" disabled="true" hidden/>

            <h5 class="">Индекс</h5>
            <input class="field form-control" id="postal_code" disabled="true"/>

            <h5 class="">Страна</h5>
            <input class="field form-control" id="country" disabled="true"/>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="/js/googlemapapiaddressform.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initAutocomplete"
            async defer></script>
@endsection