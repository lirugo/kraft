@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="#">{{trans('app.Object')}}</a>
            </div>
        </div>
    </div>
@endsection
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
                <h5>{{trans('app.Register objects of company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
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
                    @foreach($objects as $object)
                        @if($object->active == true)
                            @php
                                if(!empty($object->reports->last()))
                                    $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                            @endphp
                            <tr
                                @if(!empty($object->reports->last()))
                                @if($reportdiff->days <= 3 && $reportdiff->invert == 1))
                                bgcolor="#ffff81"
                                @elseif($reportdiff->days > 3 && $reportdiff->invert == 1)
                                bgcolor="white"
                                @else
                                bgcolor="#efbfbc"
                                @endif
                                @else
                                bgcolor="white"
                                @endif>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>
                                    @php
                                        if(empty($object->reports->last()))
                                               echo trans('app.Without report');
                                        else{
                                           if($reportdiff->invert == 0 && $reportdiff->days == 0)
                                               echo trans('app.Report need send today');
                                           else  if($reportdiff->invert == 1 && $reportdiff->days == 0)
                                               echo trans('app.Report need send tomorrow');
                                           else  if($reportdiff->invert == 1)
                                               echo trans('app.Days left').$reportdiff->days;
                                           else  if($reportdiff->invert == 0)
                                               echo trans('app.Days overdue').$reportdiff->days;
                                        }
                                    @endphp
                                </td>
                                <td>{{$object->rmuser->name}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/distributor/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{trans('app.View')}}<br></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Not register objects of company')}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
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
                    @foreach($objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>{{$object->rmuser->name}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/distributor/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{trans('app.View')}}<br></a>
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
