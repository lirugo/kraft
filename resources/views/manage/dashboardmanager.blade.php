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
                                <a href="/manager/users">
                                <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                                    {{--@if($data['clients'] != 0)--}}
                                        {{--<span class="badge badge-secondary" style="position:absolute; margin-left: -10px;">{{ $data['clients'] }}</span>--}}
                                    {{--@endif--}}
                                <div class="description m-t-10">
                                    Список клиентов
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/manager/objects">
                                <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    {{--@if($data['objects'] != 0)--}}
                                        {{--<span class="badge badge-secondary" style="position:absolute; margin-left: -10px;">{{ $data['objects'] }}</span>--}}
                                    {{--@endif--}}
                                <div class="description m-t-10 m-t-10">
                                    {{ trans('app.objects') }}
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/manager/moderation">
                                    <i class="fa fa-check fa-5x" aria-hidden="true"></i>
                                    {{--@if($data['ch'] != 0)--}}
                                        {{--<span class="badge badge-secondary" style="position:absolute; margin-left: -10px;">{{ $data['ch'] }}</span>--}}
                                    {{--@endif--}}
                                    <div class="description m-t-10">
                                       Модерация
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
