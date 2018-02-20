@extends('layouts.admin')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading">Mange Dashboard for admin</div>
                <div class="panel-body">
                    <div class="row m-t-20">
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/admin/settings">
                                    <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Settings
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/admin/users/create">
                                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Create User
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/admin/users/show">
                                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        List users
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