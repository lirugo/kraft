@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Main')}}</a>
                <a class="link-bread" href="#">{{trans('app.Objects')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Registered Objects Company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distributor</th>
                        <th scope="col">Address</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Days before the report')}}</th>
                        <th scope="col">{{trans('app.RM')}}</th>
                        <th scope="col">{{trans('app.Phone RM')}}</th>
                        <th scope="col">{{trans('app.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.No Registered Objects Company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distributor</th>
                        <th scope="col">Address</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Days before the report')}}</th>
                        <th scope="col">{{trans('app.RM')}}</th>
                        <th scope="col">{{trans('app.Phone RM')}}</th>
                        <th scope="col">{{trans('app.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['objects'] as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->distr}}</td>
                                <td>
                                    {{$object->city}} <br/> {{$object->street}}
                                </td>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>{{$object->rmuser->name}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{trans('app.View')}}<br></a>
                                </td>
                                <td>
                                    {!! Form::open(['url' => '/object/'.$object->id.'/delete/top', 'methods' => 'POST']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
