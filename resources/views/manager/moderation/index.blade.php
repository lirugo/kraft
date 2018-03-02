@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Модерация</a>
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
                                <a href="/manager/moderation/company">
                                        <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                                        @if($data['company'] != 0)
                                        <span class="badge badge-secondary" style="position:absolute; margin-left: -10px;">{{ $data['company'] }}</span>
                                        @endif
                                    <div class="description m-t-10">
                                        Компания
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
