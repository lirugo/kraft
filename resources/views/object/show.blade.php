@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="col-md-2 col-md-offset-1 text-center">
                    <div class="card">
                        <a href="/object/register">
                            <i class="fa fa-plus fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                {{trans('app.New Object')}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Registered Objects Company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date Registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Next Report')}}</th>
                        <th scope="col">{{trans('app.Regional Manager')}}</th>
                        <th scope="col">{{trans('app.Phone RM')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == true)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>{{$object->dateofreport}}</td>
                                <td>{{$object->rmname}}</td>
                                <td>{{$object->rmphone}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Not Registered Objects Company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date Registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Next Report')}}</th>
                        <th scope="col">{{trans('app.Regional Manager')}}</th>
                        <th scope="col">{{trans('app.Phone RM')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>{{$object->dateofreport}}</td>
                                <td>{{$object->rmname}}</td>
                                <td>{{$object->rmphone}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
