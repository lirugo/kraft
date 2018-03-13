@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Калькулятор</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-2 text-center">
                            <div class="card">
                                <a href="/calc/tprofile/{{$object->id}}">
                                    <img src="\img\icon\calc\tprofile.png" width="150px"/>
                                    <div class="description m-t-10">
                                        Т-Профиль
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/calc/grilyato/{{$object->id}}">
                                    <img src="\img\icon\calc\grilyato.png" width="150px"/>
                                    <div class="description m-t-10">
                                        Грильято
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/calc/cube/{{$object->id}}">
                                    <img src="\img\icon\calc\cube.png" width="150px"/>
                                    <div class="description m-t-10">
                                        Рейка
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/calc/led/{{$object->id}}">
                                    <img src="\img\icon\calc\led.png" width="150px"/>
                                    <div class="description m-t-10">
                                        KRAFT LED
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
@section('scripts')
@endsection