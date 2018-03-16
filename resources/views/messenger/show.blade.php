@extends('layouts.app')

@section('stylesheets')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <h1>{{ $thread->subject }}</h1>
                <div style="height:auto; max-height:400px; overflow:auto;" id="scrollbottom">
                @each('messenger.partials.messages', $thread->messages, 'message')
                </div>
                @include('messenger.partials.form-message')
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        window.onload=function () {
            var objDiv = document.getElementById("scrollbottom");
            objDiv.scrollTop = objDiv.scrollHeight;
        }
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection
