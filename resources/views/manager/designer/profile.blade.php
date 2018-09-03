@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage"> {{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/users"> {{ trans('app.List of Client') }}</a>
                <a class="link-bread" href="/manager/designer/{{$user->id}}">{{$user->name." ".$user->name}}</a>
                <a class="link-bread" href="#">{{ trans('app.Profile Designer') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="padding: 30px 0 0 50px;">
                <h5><strong>{{$user->name}}</strong></h5>
                <hr>
                <p>{{ trans('app.Date of Birth') }}: {{ $user->dateofbirth }}</p>
                <p>{{ trans('app.Phone') }}: {{ $user->phone }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>{{ trans('app.Work experience, number of years') }}: {{ $user->workexperience }}</p>
                <p>{{ trans('app.Site') }}: <a href="http://{{ $user->site }}">{{ $user->site }}</a></p>
                <p>
                    @if(!empty($user->social1))<a href="{{$user->social1}}"><i class="fa fa-facebook-official fa-3x" style="color:#3b5998;" aria-hidden="true"></i></a>@endif
                    @if(!empty($user->social2))<a href="{{$user->social2}}"><i class="fa fa-linkedin-square fa-3x" style="color:#0274b3;" aria-hidden="true"></i></a>@endif
                    @if(!empty($user->social3))<a href="{{$user->social3}}"><i class="fa fa-twitter-square fa-3x" style="color:black" aria-hidden="true"></i></a>@endif
                <p>{{ trans('app.Place of work') }}
                @if($user->work_user == "himself")
                    {{ trans('app.Work For Himself') }}
                @elseif($user->work_user == "company")
                    <br>{{ trans('app.Company') }}: {{ $user->companyname }}
                    <br>{{ trans('app.City') }}: {{ $user->companycity }}
                    <br>{{ trans('app.Site Company') }}: <a href="http://{{ $user->companysite }}">{{ $user->companysite }}</a>
                @endif
                </p>
                <p>{{ trans('app.Comments') }}: {{$user->comments}}</p>
            </div>

        </div>
    </div>
@endsection
