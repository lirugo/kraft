@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/moderation">{{ trans('app.Moderation') }}</a>
                <a class="link-bread" href="#">{{ trans('app.Company Profile') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid m-t-20">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @foreach($repeats as $rp)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                @if($rp->stock)
                                    <a href="{{url('/order/stock/'.$rp->order_id)}}">{{$rp->order_id}}</a>
                                @else
                                    <a href="{{url('/order/'.$rp->object_id.'/select/'.$rp->order_id)}}">{{$rp->order_id}}</a>
                                @endif
                            </div>
                            <div class="panel-body center">
                                {!! Form::open(['url' => '/manager/moderation/company/orders/'.$rp->id]) !!}
                                <button type="submit" class="botton botton-default">Разрешить</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
