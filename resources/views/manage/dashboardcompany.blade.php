@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">{{ trans('app.Panel Control') }}</a>
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
                                        <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            {{ trans('app.Create User') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-50">
                            <div class="col-md-2 col-md-offset-1 text-center">
                                <div class="card">
                                    <a href="{{url('/stock')}}">
                                        <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            {{ trans('app.Warehouse calculation') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="/order/history">
                                        <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            {{ trans('app.History calculation') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="card">
                                    <a href="{{url('https://docs.google.com/file/d/1ZiLx69IrxymJ5d4LVX157GSCgEzfzLAs2wI6zFtgGIs/view#gid=1143152097')}}" target="_blank">
                                        <i class="fa fa-truck fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            {{ trans('app.Status order') }}
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
