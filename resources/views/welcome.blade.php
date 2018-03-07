@extends('layouts.app')
@section('content')
    <div class="container-fluid background-welcome">
        <div class="row">
            <div class="col-md-4 col-md-offset-2 m-t-100 text-welcome">
                <h4>{{ trans('app.h4welcome') }}</h4>
                <hr>
                <h1>
                    {{ trans('app.h1welcometext') }}
                </h1>
            </div>
        </div>
    </div>
@endsection
