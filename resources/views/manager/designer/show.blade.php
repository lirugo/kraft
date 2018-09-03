@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/users">{{ trans('app.List of Client') }}</a>
                <a class="link-bread" href="#">{{$user->name." ".$user->name}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 text-center">
                <div class="card">
                    <a href="{{ route('manager.designer.profile', $user->id) }}">
                        <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
                        <div class="description m-t-10">
                            {{ trans('app.Profile Designer') }}
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{ trans('app.Registered Objects') }}</h5>
                <table class="table" id="clickable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ trans('app.Name') }}</th>
                        <th scope="col">{{ trans('app.Region') }}</th>
                        <th scope="col">{{ trans('app.Manager') }}</th>
                        <th scope="col">{{ trans('app.Date Registration') }}</th>
                        <th scope="col">{{ trans('app.Date product delivery') }}</th>
                        <th scope="col">{{ trans('app.Next Report') }}</th>
                        <th scope="col">{{ trans('app.Action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->objects as $object)
                        @php
                            if(!empty($object->reports->last()))
                                $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                        @endphp
                        <tr bgcolor="
                                @if(!empty($object->reports->last()))
                        @if($reportdiff->days <= 3 && $reportdiff->invert == 1))
                                #ffff81
                                @elseif($reportdiff->days > 3 && $reportdiff->invert == 1)
                                white
                                @else #fe8081
                                @endif
                        @else
                                white
                                @endif">
                            <th scope="row">{{$object->id}}</th>
                            <td>{{$object->name}}</td>
                            <td>{{$object->getregion->regionname_ru}}</td>
                            <td>{{$object->user->name}}</td>
                            <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                            <td>{{$object->dateofdelivery}}</td>
                            <td>
                                @php
                                    if(empty($object->reports->last()))
                                           echo trans('app.Without Report');
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
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{ trans('app.View') }}<br></a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ShowNotRegistred objects-->
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Не зарегестрированые объекты</h5>
                <table class="table" id="clickable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ trans('app.Name') }}</th>
                        <th scope="col">{{ trans('app.Region') }}</th>
                        <th scope="col">{{ trans('app.Manager') }}</th>
                        <th scope="col">{{ trans('app.Date Registration') }}</th>
                        <th scope="col">{{ trans('app.Date product delivery') }}</th>
                        <th scope="col">{{ trans('app.Next Report') }}</th>
                        <th scope="col">{{ trans('app.Action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{ trans('app.View') }}<br></a>
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
