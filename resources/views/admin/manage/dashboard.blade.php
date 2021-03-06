@extends('layouts.admin')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
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
                                <a href="/admin/settings">
                                    <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('admin.setting') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/admin/users/create">
                                    <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('admin.createuser') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/admin/users/show">
                                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('admin.listusers') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/admin/product/">
                                    <i class="fa fa-upload fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Products
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<a href="/admin/calc">--}}
                                    {{--<i class="fa fa-calculator fa-5x" aria-hidden="true"></i>--}}
                                    {{--<div class="description m-t-10">--}}
                                        {{--Setting Calculator--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/admin/news/create">
                                    <i class="fa fa-newspaper-o fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Create News
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/admin/distributor">
                                    <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Distributor setting 1C
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
