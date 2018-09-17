@extends('layouts.app')
@section('content')
    <div class="container-fluid background-welcome">
        <div class="row">
            <div class="col-md-4 col-md-offset-2 m-t-100 text-welcome">
                <div class="row">
                    <div class="col-md-8"> <h4>{{ trans('app.h4welcome') }}</h4></div>
                </div>
                <hr class="m-t-10">
                <h1>
                    {{ trans('app.h1welcometext') }}
                </h1>
                <h4>Onliner v1.0</h4>
            </div>
        </div>
    </div>
@endsection
