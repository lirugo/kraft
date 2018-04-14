@extends('layouts.app')
@section('stylesheets')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <style>
        /* CSS used here will be applied after bootstrap.css */

        .modal{
            display: block !important;
        }
        .modal-dialog{
            overflow-y: initial !important
        }
        .modal-body{
            height: 250px;
            overflow-y: auto;
        }
    </style>
@endsection

@section('content')
    <!-- Scroll bar present and enabled -->
    <div >
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
        test<br />
    </div>
@endsection


@section('scripts')

    <script>

        var d = new Date();
        var date = "";
        date += d.getFullYear()+"-"+('0'+(d.getMonth()+1)).slice(-2)+"-"+d.getDate()+" "+d.getHours()+":"+('0'+(d.getMinutes()+1)).slice(-2)+":"+('0'+(d.getSeconds()+1)).slice(-2);

        console.log(date);

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;


    </script>
@endsection
