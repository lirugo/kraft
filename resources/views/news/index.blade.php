@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Новости</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        @foreach($news as $new)
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <div class="panel panel-default" style="border: 2px solid #f78620">
                    <h3 class="text-center text-info">
                        {{$new->title}}
                        <hr style="margin-bottom:0; ">
                    </h3>
                    <div class="panel-body  border border-primary" style="margin-bottom:0; ">
                        {{$new->body}}
                        <hr style="margin: 0;">
                        <h6 class="pull-right" style="margin:0; margin-top: 5px;">
                            <i>Дата создания: {{$new->created_at->format('Y-m-d h:i')}}</i>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
