@extends('layouts.app')
@section('stylesheets')

    <style>
    </style>
@endsection

@section('content')
@endsection


@section('scripts')

    <script>
        var pusher = new Pusher('c704c07a87b11b822dfb', {
            encrypted: true
        });
        var channel = pusher.subscribe('chatobject.1');

        Pusher.logToConsole = true;


    </script>
@endsection
