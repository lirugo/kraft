@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="/managers">{{trans('app.Managers')}}</a>
                <a class="link-bread" href="#">{{$data['user']->name}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="/uploads/avatars/{{ $data['user']->avatar }}" class="avatar"/>
                <h2>{{trans('app.Profile')}}</h2>
                <div class="row"> <div class="col-md-12"> </div> </div>
                <div class="row">
                    <div class="col-md-4">
                        <hr>
                        {!! Form::label('name', trans('app.Name'), ['class' => 'm-t-10']) !!}
                        {!! Form::text('name', $data['user']->name, ['class' => 'form-control']) !!}
                        {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                        {!! Form::text('email', $data['user']->email, ['class' => 'form-control', 'readonly']) !!}
                        {!! Form::label('dateofbirth', trans('app.Date of Birth'), ['class' => 'm-t-10']) !!}
                        {!! Form::text('dateofbirth', $data['user']->dateofbirth, ['class' => 'form-control', 'id' => 'datepicker']) !!}
                        {!! Form::label('sex', trans('app.Sex'), ['class' => 'm-t-10']) !!}
                        {!! Form::label('sex', $data['user']->sex == 'X' ? trans('app.male') : trans('app.femele'), ['class' => 'form-control']) !!}
                        {!! Form::label('phone', trans('app.Phone'), ['class' => 'm-t-10']) !!}
                        {!! Form::text('phone', $data['user']->phone, ['class' => 'form-control']) !!}
                        <br>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <h5>{{trans('app.Registered Distributors')}}</h5>
                        <hr>
                        @foreach($data['distributors'] as $user)
                            @if($user->hasRole('distributor')  && $user->active == true)
                                @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                                <h5><a href="/manager/distributor/{{ $user->id }}"><strong>{{ $user->getcompany->companyname }}</strong></a></h5>
                                <hr style="margin:0; padding: 0;">
                                <h6>{{ $region->regionname_ru." область" }}</h6>
                                <h6>{{ $user->getcompany->city }}</h6>
                                <h6>{{  $user->name }}</h6>
                                <h6>{{ $user->phone }}</h6>
                                <h6>{{trans('app.Region')}} {{ $user->regionname }}</h6>
                                <br>
                            @endif
                        @endforeach

                        <h5>{{trans('app.Not Registered Distributors')}}</h5>
                        <hr>
                        @foreach($data['distributors'] as $user)
                            @if($user->hasRole('distributor') && $user->active == false)
                                @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                                <h5><a href="/manager/distributor/{{ $user->id }}"><strong>{{ $user->getcompany->companyname }}</strong></a></h5>
                                <hr style="margin:0; padding: 0;">
                                <h6>{{ $region->regionname_ru." область" }}</h6>
                                <h6>{{ $user->getcompany->city }}</h6>
                                <h6>{{  $user->name }}</h6>
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
        </div>
    </div>
@endsection
