@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/shop">{{ trans('app.Shop') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row m-t-100">
            <div class="col-md-2 col-md-offset-1">
                <div class="panel">
                    <a href="{{url('/shop/show?sort=tprofile')}}">
                    <img class="panel-img-top center-block" src="{{asset('/img/icon/calc/tprofile.png')}}" width="150px" alt="Card image cap">
                    <div class="panel-body">
                        <h5 class="panel-title m-b-10 text-center">{{ trans('app.T-Profile') }}</h5>
                        {{--<p class="panel-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel">
                    <a href="{{url('/shop/show?sort=grilyato')}}">
                    <img class="panel-img-top center-block" src="{{asset('/img/icon/calc/grilyato.png')}}" width="150px" alt="Card image cap">
                    <div class="panel-body ">
                        <h5 class="panel-title m-b-10 text-center">{{ trans('app.Grilyato') }}</h5>
                        {{--<p class="panel-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel">
                    <a href="{{url('/shop/show?sort=reyka')}}">
                    <img class="panel-img-top center-block" src="{{asset('/img/icon/calc/led.png')}}" width="150px" alt="Card image cap">
                    <div class="panel-body">
                        <h5 class="panel-title m-b-10 text-center">{{ trans('app.Kraft LED') }}</h5>
                        {{--<p class="panel-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel">
                    <a href="{{url('/shop/show?sort=accessories')}}">
                    <img class="panel-img-top center-block" src="{{asset('/img/icon/calc/accessories.png')}}" width="150px" alt="Card image cap">
                    <div class="panel-body">
                        <h5 class="panel-title m-b-10 text-center">{{ trans('app.Accessories') }}</h5>
                        {{--<p class="panel-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel">
                    <a href="{{url('/shop/show?sort=svet')}}">
                    <img class="panel-img-top center-block" src="{{asset('/img/icon/calc/svet.png')}}" width="150px" alt="Card image cap">
                    <div class="panel-body">
                        <h5 class="panel-title m-b-10 text-center">{{ trans('app.Light') }}</h5>
                        {{--<p class="panel-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
