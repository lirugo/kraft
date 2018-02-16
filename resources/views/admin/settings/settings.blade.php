@extends('layouts.admin')
@section('breadcrumbs')
    {!! Breadcrumbs::render('settings') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <p>
                    @if (App::isDownForMaintenance())
                        {!! Form::open(['method' => 'POST', 'route' =>['admin.settings.maintenance.off']]) !!}
                        {!! Form::label("Maintenance mode: Enabled",null, ['class' => 'form-control m-t-10']) !!}
                        {!! Form::submit("Disable", ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'route' =>['admin.settings.maintenance.on']]) !!}
                        {!! Form::label("Maintenance mode: Disabled",null, ['class' => 'form-control m-t-10']) !!}
                        {!! Form::submit("Enable", ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
                        {!! Form::close() !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
