@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
                    <label class="toggle">
                        <input type="radio" name="toggle" checked> <span class="label-text">Option 01</span>
                    </label>
                    <label class="toggle">
                        <input type="radio" name="toggle"> <span class="label-text">Option 02</span>
                    </label>

                    <label class="toggle">
                        <input type="radio" name="toggle"> <span class="label-text">Option 02</span>
                    </label>
@endsection

@section('scripts')
    <script>
    </script>
@endsection