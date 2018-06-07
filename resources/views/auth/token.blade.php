@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default m-t-100">
                    <div class="panel-heading">Two factor authentication</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/auth/token', 'method' => 'POST']) !!}
                        {!! Form::label('We send SMS on your phone') !!}
                        {!! Form::number('token',null, ['class' => 'form-control', 'placeholder' => 'Enter code from SMS', 'autofocus']) !!}
                        {!! Form::submit('Verify', ['class' => 'botton botton-primary pull-right m-t-10']) !!}
                        {!! Form::close() !!}

                        @if(request()->session()->get('authy.using_sms'))
                            <br/>
                            <br/>
                            <hr>
                            <p class="help-block">
                                Token not arrived? <a href="/auth/token/resend">Resend token</a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
