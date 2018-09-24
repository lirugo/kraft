@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="#">Склад</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row m-t-50">
            <div class="col-md-2 col-md-offset-1 text-center">
                <div class="card">
                    <a href="{{url('/order')}}">
                        <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                        <div class="description m-t-10">
                            {{trans('app.calculator')}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="card">
                    <a href="/shop">
                        <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                        <div class="description m-t-10">
                            {{trans('app.slt from schedule')}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
