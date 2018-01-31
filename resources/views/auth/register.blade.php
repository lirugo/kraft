@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center m-t-100">
            <h1> Register </h1>
            <h5> To access the system, you need to register </h5>
                <hr>
            <a class="btn btn-default" href="{{ route('register.company') }}" role="button">Company</a>
            <a class="btn btn-default" href="{{ route('register.user') }}" role="button">Architect</a>
            <a class="btn btn-default" href="{{ route('register.user') }}" role="button">Designer</a>
        </div>
    </div>
</div>
@endsection
