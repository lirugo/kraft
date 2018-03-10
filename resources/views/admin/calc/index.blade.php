@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
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
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/admin/calc/tprofile">
                                    <img src="\img\icon\calc\tprofile.png" width="150px"/>
                                    <div class="description m-t-10">
                                        Т-Профиль
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                            <!--                            <a href="/calc/grilyato">-->
                                <img src="\img\icon\calc\grilyato.png" width="150px"/>
                                <div class="description m-t-10">
                                    Грильято
                                </div>
                                <!--                            </a>-->
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                            <!--                            <a href="/calc/cube">-->
                                <img src="\img\icon\calc\cube.png" width="150px"/>
                                <div class="description m-t-10">
                                    Рейка
                                </div>
                                <!--                            </a>-->
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
