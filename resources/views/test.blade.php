@extends('layouts.app')
@section('stylesheets')


@endsection
@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="form-inline">
                {!! Form::select('hrp',[
                    '+38',
                    '+7',
                ], null, ['class' => 'form-control']) !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'XXX XX XX']) !!}
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection