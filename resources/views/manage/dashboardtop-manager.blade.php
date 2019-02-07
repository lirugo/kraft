@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">{{ trans('app.Panel Control') }}</a>
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
                                <a href="/managers">
                                <i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.managers') }}
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/distributors">
                                <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.distributors') }}
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/topmanager/objects">
                                    <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('app.Objects') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<i class="fa fa-university fa-5x" aria-hidden="true"></i>--}}
                                {{--<div class="description m-t-10">--}}
                                    {{--{{ trans('app.objects') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>--}}
                                {{--<div class="description m-t-10">--}}
                                    {{--{{ trans('app.statistics') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                    {{--<i class="fa fa-tasks fa-5x" aria-hidden="true"></i>--}}
                                    {{--<div class="description m-t-10">--}}
                                        {{--{{ trans('app.profilecompany') }}--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row m-t-100">--}}
                        {{--<div class="col-md-2 col-md-offset-1 text-center">--}}
                            {{--<div class="card">--}}
                                    {{--<i class="fa fa-users fa-5x" aria-hidden="true"></i>--}}
                                    {{--<div class="description m-t-10">--}}
                                        {{--{{ trans('app.userscompany') }}--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
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
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="{{url('https://docs.google.com/file/d/1ZiLx69IrxymJ5d4LVX157GSCgEzfzLAs2wI6zFtgGIs/view#gid=1143152097')}}" target="_blank">
                                    <i class="fa fa-truck fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        {{ trans('app.Status order') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<i class="fa fa-calculator fa-5x" aria-hidden="true"></i>--}}
                                {{--<div class="description m-t-10">--}}
                                    {{--{{ trans('app.calculator') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<i class="fa fa-file-excel-o fa-5x" aria-hidden="true"></i>--}}
                                {{--<div class="description m-t-10">--}}
                                    {{--{{ trans('app.invoice') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 text-center">--}}
                            {{--<div class="card">--}}
                                {{--<i class="fa fa-history fa-5x" aria-hidden="true"></i>--}}
                                {{--<div class="description m-t-10">--}}
                                    {{--{{ trans('app.history') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-2 col-md-offset-1 text-center">
                            <div class="card">
                                <a href="/manager/moderation/objects/">
                                    <i class="fa fa-close fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Запросы на удаление
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
