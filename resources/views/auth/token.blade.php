@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default m-t-100">
                    <div class="panel-heading">{{ trans('app.two factor auth') }}</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/auth/token', 'method' => 'POST']) !!}
                        {!! Form::label(trans('app.We send SMS on your phone')) !!}
                        {!! Form::number('token',null, ['class' => 'form-control', 'placeholder' => trans('app.Enter Code Form SMS'), 'autofocus']) !!}
                        {!! Form::submit(trans('app.Submit'), ['class' => 'botton botton-primary pull-right m-t-10']) !!}
                        {!! Form::close() !!}

                        @if(request()->session()->get('authy.using_sms'))
                            <br/>
                            <br/>
                            <hr>
                            <p class="help-block">
                                {{trans('app.Token not arrived')}}? <a href="/auth/token/resend">{{trans('app.Resend token')}}</a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
