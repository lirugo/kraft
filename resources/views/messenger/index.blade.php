@extends('layouts.app')

@section('stylesheets')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('content')
    @include('messenger.partials.flash')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="/messages/create" class="btn btn-primary">Create new message</a>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection
