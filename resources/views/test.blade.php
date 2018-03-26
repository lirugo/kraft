@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
        <input type="text" onchange="tprofile_re_count(this)">

@endsection

@section('scripts')
    <script>
        function tprofile_re_count(x) {
            x.value = "asd";
        }
    </script>
@endsection