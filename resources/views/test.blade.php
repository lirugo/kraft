@extends('layouts.app')
@section('stylesheets')

    <style>




    </style>
@endsection
@section('content')

    <p>Decked out with options
        <select class="selectpicker show-menu-arrow"
                multiple="true"
                title="Choose one of the following..."
                data-selected-text-format="count>3"
                data-size="10"
                data-width="auto"
                data-hide-disabled="false"
                data-dropup-auto="false"
                data-style="btn-inverse"
                data-mobile="false"
                data-show-subtext="true"
                data-max-options=7>

            <option>Nissan</option>
            <option>Altima</option>
            <option>Gallant</option>
            <option>Pathfinder</option>
            <option>Pathfinder</option>

        </select>
    </p>
@endsection

@section('scripts')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script>

    </script>
@endsection