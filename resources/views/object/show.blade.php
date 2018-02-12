@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Show Object</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('object.register') }}"><input type="button" value="Create Object" class="btn btn-sml btn-primary pull-left"/></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                Show Object
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
