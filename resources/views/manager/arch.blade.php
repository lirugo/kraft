@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('designers') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 50px;">
                            {{$user->name}}
                            {!! Form::model($user,['route' => ['manager.user.activate', $user->id], 'method' => 'POST', 'style' => 'margin-top:-25px;']) !!}
                            <button class="btn btn-danger btn-sm pull-right">{{$user->active == true ? trans('app.Disable') : trans('app.Activate')}}</button>
                            {!! Form::close() !!}
                            {!! Form::model($user,['route' => ['manager.user.verified', $user->id], 'method' => 'POST', 'style' => 'margin-right:110px;']) !!}
                            <button class="btn btn-danger btn-sm pull-right">{{$user->verified == true ? trans('app.Recheck') : trans('app.Check')}}</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <hr>
                                <p>{{ empty($user->company) ? null : trans('app.Company Name').': '.$user->company  }}</p>
                                <p>{{trans('app.name')}}: {{$user->name}}</p>
                                <p>{{trans('app.dateofbirth')}}: {{$user->dateofbirth}}</p>
                                <p>{{trans('app.gender')}}: {{$user->sex == 'X' ? trans('app.male') : trans('app.femele')}}</p>
                                <p>{{trans('app.email')}}: {{$user->email}}</p>
                                <p>{{trans('app.phone')}}: {{$user->phone}}</p>
                            </div>
                            <div class="col-md-4">
                                <hr>
                                <img src="/uploads/avatars/{{$user->avatar}}" style="
                                    width:150px;
                                    height:150px;
                                    border-radius: 50%;
                                    display: block;
                                    margin: 0 auto;
                                "/>
                            </div>
                            <div class="col-md-4">
                                <hr>
                                <p>{{trans('app.Active')}}: {{$user->active == true ? trans('app.Yes') : trans('app.No')}}</p>
                                <p>{{trans('app.Checked')}}: {{$user->verified == true ? trans('app.Yes') : trans('app.No')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
