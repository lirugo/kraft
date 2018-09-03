@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">{{trans('app.Panel Control')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    {{trans('app.Main')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
