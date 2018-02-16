@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('manage') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading a:panel-heading">
                    <a href="{{ url('/manage/dashboard') }}">{{trans('app.manage')}}</a>
                </div>
                    <div class="panel-body">
                        <div class="row m-t-20">
                            <div class="col-md-2 col-md-offset-1 text-center">
                                <div class="card">
                                <a href="/object/show">
                                <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('app.objects') }}
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="/company/profile">
                                    <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('app.profilecompany') }}
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="/company/users">
                                        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            {{ trans('app.userscompany') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="/profile">
                                        <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('app.profileuser') }}
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
