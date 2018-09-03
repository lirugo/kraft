@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
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
                        <th>{{trans('app.Date Report')}}</th>
                        <th>{{trans('app.Comments')}}</th>
                        <th>{{trans('app.Status')}}</th>
                        <th>{{trans('app.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['reports'] as $report)
                        <tr>
                            <td>{{$report->dateofreport}}</td>
                            <td>{{strlen($report->comments) > 60 ? substr($report->comments, 0, 60)."...": $report->comments}}</td>
                            <td>{{$report->done == false ? trans('app.Report not submitted') : trans('app.Was passed')}}</td>
                            <td>
                                @if($report->done == false && Auth::user()->id == $data['user']->id) <a href="/report/submit/{{$report->id}}" class="btn btn-primary">{{trans('app.Submit a report')}}</a>
                                @else <a href="/report/show/{{$report->id}}" class="btn btn-primary">{{trans('app.View')}}</a>
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
