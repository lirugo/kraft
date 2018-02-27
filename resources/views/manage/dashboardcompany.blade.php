@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Панель управления</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel-body">
                        <div class="row m-t-20">
                            <div class="col-md-2 col-md-offset-1 text-center">
                                <div class="card">
                                <a href="/distributor/objects">
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
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="/company/users/create">
                                        <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                           Create User
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
