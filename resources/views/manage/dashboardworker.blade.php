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
                                <a href="/worker/objects/show">
                                    <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10 m-t-10">
                                        {{ trans('app.objects') }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
