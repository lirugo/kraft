@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/users">{{ trans('app.List of Client') }}</a>
                <a class="link-bread" href="/manager/distributor/{{$users->idback}}">{{ trans('app.Distributor') }}</a>
                <a class="link-bread" href="#">{{ trans('app.Company users') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ trans('app.Registered users of company') }}
                <hr style="margin: 0;">
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
                @if($user->active == true)
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <h5><strong>{{ $user->name }}</strong></h5>
                        <hr style="margin: 0;">
                        <div class="col-md-4">
                            <img src="/uploads/avatars/{{$user->avatar}}" style="
                                            width:100px;
                                            height:100px;
                                            border-radius: 50%;
                                            display: block;
                                            margin: 0 auto;
                                            margin-top: 10px;
                                        "/>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>{{ trans('app.Date of Birth') }}: {{ $user->dateofbirth }}</p>
                            <p>{{ trans('app.Phone') }}: {{ $user->phone }}</p>
                            <p>Email: {{ $user->email }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ trans('app.Not Registered users of company') }}
                <hr style="margin: 0;">
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
                @if($user->active == false)
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <h5><strong>{{ $user->name }}</strong></h5>
                        <hr style="margin: 0;">
                        <div class="col-md-4">
                            <img src="/uploads/avatars/{{$user->avatar}}" style="
                                            width:100px;
                                            height:100px;
                                            border-radius: 50%;
                                            display: block;
                                            margin: 0 auto;
                                            margin-top: 10px;
                                        "/>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>{{ trans('app.Date of Birth') }}: {{ $user->dateofbirth }}</p>
                            <p>{{ trans('app.Phone') }}: {{ $user->phone }}</p>
                            <p>Email: {{ $user->email }}</p>
                            <p>
                                {!! Form::open(['route' => ['manager.user.activate', $user->id], 'method' => 'post']) !!}
                                {!! Form::submit(trans('app.Activate'), ['class' => 'btn btn-primary pull-right']) !!}
                                {!! Form::close() !!}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
