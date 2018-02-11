@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center m-t-100">
            <h1> {{ trans('app.register') }} </h1>
            <h5> {{ trans('app.registertext') }}</h5>
                <hr>
            <a class="botton-default botton" href="{{ route('register.company') }}" role="button">{{ trans('app.company') }}</a>
            <a class="botton-default botton" href="{{ route('register.user') }}" role="button">{{ trans('app.arch/design') }}</a>
        <!--<a class="btn btn-default" href="{{ route('register.user') }}" role="button">Designer</a>-->
        </div>
    </div>
</div>
@endsection
