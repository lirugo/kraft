@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Дата отчета</th>
                        <th>Коментарий</th>
                        <th>Сатутус</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['reports'] as $report)
                        <tr>
                            <td>{{$report->dateofreport}}</td>
                            <td>{{strlen($report->comments) > 60 ? substr($report->comments, 0, 60)."...": $report->comments}}</td>
                            <td>{{$report->done == false ? "Отчет не сдан" : "Сдан"}}</td>
                            <td>
                                @if($report->done == false && Auth::user()->id == $data['user']->id) <a href="/report/submit/{{$report->id}}" class="btn btn-primary">Подать отчет</a>
                                @else <a href="/report/show/{{$report->id}}" class="btn btn-primary">Посмотреть</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
