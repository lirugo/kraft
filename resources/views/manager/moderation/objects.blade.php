@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/moderation">{{ trans('app.Moderation') }}</a>
                <a class="link-bread" href="#">Удаление объектов</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid m-t-20">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @foreach($objects as $object)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="{{url('/manager/object/show/'.$object->object_id)}}">{{$object->object->name}}</a></div>
                            <div class="panel-body center">
                                {!! Form::open(['url' => '/object/'.$object->id.'/delete']) !!}
                                <button type="submit" class="botton botton-default">Удалить</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
