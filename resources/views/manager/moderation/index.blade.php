@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="#">{{trans('app.Moderation')}}</a>
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
                                        {{trans('app.Company Profile')}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/manager/moderation/company/users">
                                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                    @if($data['users'] != 0)
                                        <span class="badge badge-secondary" style="position:absolute; margin-left: -10px;">{{ $data['users'] }}</span>
                                    @endif
                                    <div class="description m-t-10">
                                        {{trans('app.Company Users')}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="card">
                                <a href="/manager/moderation/company/orders">
                                    <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                                    <div class="description m-t-10">
                                        Перевыставление счетов
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
