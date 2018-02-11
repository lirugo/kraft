@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel-heading">Mange Dashboard</div>
                        <div class="panel-body">
                            <div class="row m-t-20">
                                <div class="col-md-2 col-md-offset-1 text-center">
                                    <div class="card">
                                    <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.objects') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                            <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.statistics') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/company/profile">
                                        <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.profilecompany') }}
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/company/users">
                                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                            <div class="description m-t-10 txt-dash">
                                                {{ trans('app.userscompany') }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/profile">
                                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.profileuser') }}
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-100">
                                <div class="col-md-2 col-md-offset-1 text-center">
                                    <div class="card">
                                        <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.calculator') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <i class="fa fa-file-excel-o fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.invoice') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10 txt-dash">
                                            {{ trans('app.history') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
