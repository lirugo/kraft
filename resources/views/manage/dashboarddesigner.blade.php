@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading a:panel-heading">
                    <a href="{{ url('/manage/dashboard') }}">{{trans('app.manage')}}</a>
                </div>
                <div class="panel-body">
                    <div class="row m-t-20">
                        <div class="col-md-2 col-md-offset-1 text-center">
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
                                <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.calculator') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{ trans('app.history') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
