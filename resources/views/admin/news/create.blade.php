@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['route' => 'admin.news.create', 'method' => 'POST']) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Text of news']) !!}
                {!! Form::submit('Add',['class' => 'btn btn-primary m-t-10']) !!}
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection
