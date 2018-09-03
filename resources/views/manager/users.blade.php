@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="#">{{trans('app.List of Client')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding-left: 60px;">
                <h5>{{trans('app.Registered Distributors')}}</h5>
                <hr>
                @foreach($users as $user)
                    @if($user->hasRole('distributor')  && $user->active == true)
                        @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                        <h5><a href="/manager/distributor/{{ $user->id }}"><strong>{{ $user->getcompany->companyname }}</strong></a></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $region->regionname_ru." область" }}</h6>
                        <h6>{{ $user->getcompany->city }}</h6>
                        <h6>{{ $user->name }}</h6>
                        <h6>{{ $user->phone }}</h6>
                        <br>
                    @endif
                @endforeach

                <h5>{{trans('app.Not Registered Distributors')}}</h5>
                <hr>
                @foreach($users as $user)
                    @if($user->hasRole('distributor') && $user->active == false)
                        @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                        <h5><a href="/manager/distributor/{{ $user->id }}"><strong>{{ $user->getcompany->companyname }}</strong></a></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $region->regionname_ru." область" }}</h6>
                        <h6>{{ $user->getcompany->city }}</h6>
                        <h6>{{ $user->name }}</h6>
                        <h6>{{ $user->phone }}</h6>
                        <h6>
                            {!! Form::open(['route' => ['manager.user.activate', $user->id], 'method' => 'post',  'class' => 'form-inline']) !!}
                            {!! Form::text('vendor_code_1c',null, ['class' => 'form-control', 'style' => 'width:200px', 'placeholder' => 'Ведите ID компании из 1С', 'required']) !!}
                            {!! Form::submit(trans('app.Activate'), ['class' => 'btn btn-primary ']) !!}
                            {!! Form::close() !!}
                        </h6>
                        <br>
                        <br>
                    @endif
                @endforeach

            </div>
            <div class="col-md-4 col-md-offset-2">
                <h5>{{trans('app.Registered Architects')}}</h5>
                <hr>
                @foreach($users as $user)
                    @if($user->hasRole('designer') && $user->active == 1)
                        <h5><a href="/manager/designer/{{ $user->id }}"><strong>{{ $user->name  }}</strong></a></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $user->phone }}</h6>
                        <br>
                    @endif
                @endforeach

                <h5>{{trans('app.Not Registered Architects')}}</h5>
                <hr>
                @foreach($users as $user)
                    @if($user->hasRole('designer') && $user->active == 0)
                        <h5><a href="/manager/designer/{{ $user->id }}"><strong>{{ $user->name }}</strong></a></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $user->phone }}</h6>
                        <h6>
                            {!! Form::open(['route' => ['manager.user.activate', $user->id], 'method' => 'post']) !!}
                            {!! Form::submit(trans('app.Activate'), ['class' => 'btn btn-primary pull-right']) !!}
                            {!! Form::close() !!}
                        </h6>
                        <br>
                        <br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
