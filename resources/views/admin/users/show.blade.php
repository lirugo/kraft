@extends('layouts.admin')
@section('breadcrumbs')
    {!! Breadcrumbs::render('showusers') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    {{$users->links()}}
                </div>
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="height: 50px;">
                                    {{$user->name}}
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <hr>
                                        <p>{{trans('app.name')}}: {{$user->name}}</p>
                                        <p>{{trans('app.surname')}}: {{$user->surname}}</p>
                                        <p>{{trans('app.patronymic')}}: {{$user->patronymic}}</p>
                                        <p>{{trans('app.dateofbirth')}}: {{$user->dateofbirth}}</p>
                                        <p>{{trans('app.gender')}}: {{$user->sex == 'X' ? trans('app.male') : trans('app.femele')}}</p>
                                        <p>{{trans('app.email')}}: {{$user->email}}</p>
                                        <p>{{trans('app.phone')}}: {{$user->phone}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <hr>
                                        <img src="/uploads/avatars/{{$user->avatar}}" style="
                                        width:150px;
                                        height:150px;
                                        border-radius: 50%;
                                        display: block;
                                        margin: 0 auto;
                                    "/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
