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
                                <a href="/designer/object/show">
                                    <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10 m-t-10">
                                        {{ trans('app.objects') }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
