@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/shop">{{ trans('app.Shop') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row m-t-100">
            <h3 class="text-center m-b-20">{{ trans('app.The specification is fully preserved') }}</h3>
            <div class="panel-body">
                <div class="row m-t-20">
                    <div class="col-md-2 col-md-offset-3 text-center">
                        <div class="card">
                            <a href="/order/history">
                                <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.History calculation') }}
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-1 text-center">
                        <div class="card">
                            <a href="/shop">
                                <i class="fa fa-cart-plus fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.Shop') }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
