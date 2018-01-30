@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1> SUCCESS! </h1>
                <i class="fa fa-check-circle-o fa-5x" style="color: #f5882c;"></i>
                <h5><p>Thanks!</p>
                    <p>Your data has been sent to administrator for review</p>
                    <p>After the check, your account will be activated</p>
                    <p>Usually it takes no more than one working day</p>
                    <p>We will send you a notification</p>
                </h5>
                <a class="btn btn-default" href="{{ route('login') }}" role="button">Login page</a>
            </div>
        </div>
    </div>
@endsection
