@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="/manager/objects">{{trans('app.Objects')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20 m-b-20">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/manager/objects/create">
                            <i class="fa fa-plus fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                {{trans('app.Create')}}
                            </div>
                        </a>
                    </div>
                </div>
                {{--@endif--}}
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Registered Object')}}</h5>
                <table class="table" id="clickable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distributor</th>
                        <th scope="col">Address</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date Registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Next Report')}}</th>
                        <th scope="col">{{trans('app.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['objects'] as $object)
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
                                <td>{{$object->distr}}</td>
                                <td>
                                    {{$object->city}} <br/> {{$object->street}}
                                </td>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user ? $object->user->name : ''}}</td>
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
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{trans('app.View')}}<br></a>
                                </td>
                                @if(Auth::user()->hasRole('manager'))
                                <td>
                                    {!! Form::open(['url' => '/object/'.$object->id.'/request/delete', 'methods' => 'POST']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                    {!! Form::close() !!}
                                </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>{{trans('app.Not Registered Object')}}</h5>
                <table class="table" id="clickable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distributor</th>
                        <th scope="col">Address</th>
                        <th scope="col">{{trans('app.Name')}}</th>
                        <th scope="col">{{trans('app.Region')}}</th>
                        <th scope="col">{{trans('app.Manager')}}</th>
                        <th scope="col">{{trans('app.Date Registration')}}</th>
                        <th scope="col">{{trans('app.Date delivery product')}}</th>
                        <th scope="col">{{trans('app.Next Report')}}</th>
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
                                <td>{{$object->user ? $object->user->name : ''}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>{{$object->dateofreport}}</td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">{{trans('app.View')}}
                                        @if($object->viewed == 0)
                                        <span class="badge badge-secondary" style="position: relative">{{trans('app.New')}}</span>
                                        @endif
                                        <br></a>
                                </td>
                                @if(Auth::user()->hasRole('manager'))
                                    <td>
                                        {!! Form::open(['url' => '/object/'.$object->id.'/request/delete', 'methods' => 'POST']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                        {!! Form::close() !!}
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#clickable tr').click(function() {
                var href = $(this).find("a").attr("href");
                if(href) {
                    window.location = href;
                }
            });

        });
    </script>
@endsection
