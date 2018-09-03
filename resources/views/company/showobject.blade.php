@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="/distributor/objects">{{trans('app.Objects')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">
    <style type="text/css">
        .lightbox{
            z-index: 1041;
        }
        .small-img{
            width:150px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row m-t-20 m-b-20">
            <div class="col-md-12">
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/order/{{$object->id}}">
                            <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                {{trans('app.Order')}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/order/{{$object->id}}/select">
                            <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                {{trans('app.My Order')}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/report/{{$object->id}}">
                            <i class="fa fa-flag fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                {{trans('app.Reports')}}
                            </div>
                        </a>
                    </div>
                </div>
                @if(Auth::user()->id == $object->creatorid)
                    <div class="col-md-2 text-center">
                        <div class="card">
                            <a href="/object/{{ $object->id }}/chat" onclick="chat()">
                                <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    {{trans('app.Ask Question')}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h2 class="text-center">{{$object->name}} - {{$object->type}}</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>{{trans('app.region')}}:</strong> {{$object->getregion->regionname_ru}}<br>
                <strong>{{trans('app.city')}}:</strong> {{$object->city}}<br>
                <strong>{{trans('app.street')}}:</strong> {{$object->street}}<br>
                <strong>{{trans('app.house')}}:</strong> {{$object->house}}<br>
                {{ !empty($object->housing) ? trans('app.office').$object->housing : "" }}<br>
                {{ !empty($object->locationinformation) ? trans('app.Additional Information').$object->locationinformation : "" }}<br>
            </div>
            <div class="col-md-4">
                <strong>{{trans('app.Company/Manager')}}:</strong>
                {!! !empty($object->company) ? trans('app.Company Name').$object->company->companyname.", " : "" !!}
                {{$object->user->patronymic." ".$object->user->name}}
                <br>
                <strong>{{trans('app.Regional Manager')}}:</strong>
                {{$object->rmuser->patronymic." ".$object->rmuser->name}}
                <br>
                <strong>{{trans('app.Phone RM')}}:</strong>
                {{$object->rmuser->phone}}
            </div>
            <div class="col-md-4">
                <strong>{{trans('app.Date Registration')}}:</strong>
                {!! Form::label(trans('app.Create Date'), Carbon\Carbon::parse($object->created_at)->format('d.m.Y')) !!}
                <br>
                    {!! Form::label(trans('app.Date delivery product'), null) !!}
                    {{ $object->dateofdelivery }}
                <br>
                <div class="form-inline">
                    {!! Form::label(trans('app.Reporting frequency: every'), null) !!}
                    {{$object->reporttime}} {{trans('app.Days')}}
                </div>
                <strong> {{trans('app.Date Activation')}}: </strong>
                {!! Form::label('Activate Date', empty($object->dateofactivate) ? " " : Carbon\Carbon::parse($object->dateofactivate)->format('d.m.Y')) !!}
                <br>
                <p>
                    @php
                        if($object->active == true && !empty($object->reports->last())){
                        $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
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
                </p>
                <p>
                    <strong>{{trans('app.Date next report')}}:</strong>
                    {!! Form::label(trans('app.Date Report'), empty($object->reports->last()->dateofreport) ? " " : Carbon\Carbon::parse($object->reports->last()->dateofreport)->format('d.m.Y')) !!}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <hr>
                <p>
                    <strong>{{trans('app.Data Object')}}:</strong><br>
                    <strong>{{trans('app.Name Object')}}:</strong> {{ $object->name }}<br>
                    <strong>{{trans('app.Address Object')}}:</strong> {{ $object->city.", ".$object->street.", ".$object->house  }}<br>
                    <strong>{{trans('app.Total area of the planned works')}}:</strong> {{ $object->sworks }} м<sup>2</sup><br>
                </p>
                <p>
                    <strong>{{trans('app.Customer')}}:</strong> {{ $object->customername }}<br>
                    <strong>{{trans('app.General Contractor')}}:</strong> {{ $object->generalbuilder }}<br>
                    <strong>{{trans('app.Representative of the general contractor')}}:</strong> {{ $object->delegatebuilderpatronymic." ".$object->delegatebuildername." тел.".$object->delegatebuilderphone }}<br>
                </p>
                <p>
                    <strong>{{trans('app.Subcontractor')}}:</strong> {{ $object->subbuildername." тел.".$object->subbuilderphone  }}<br>
                    <strong>{{trans('app.Architecture')}}:</strong> {{$object->archname." тел.".$object->archphone  }}<br>
                    <strong>{{trans('app.Design')}}:</strong> {{ $object->designname." тел.".$object->designphone  }}<br>
                </p>
                <p>
                    <strong>{{trans('app.Comments')}}:</strong> {{ $object->comments }}<br>
                </p>
            </div>
            <div class="col-md-4">
                <hr>
                <h4 class="text-center">{{trans('app.Proposed products')}}</h4>
                <p>{{trans('app.T-Profile')}} - {{ $object->product1 == 0 ? trans('app.No') : trans('app.Yes') }}</p>
                <p>{{trans('app.Grilyato')}} - {{ $object->product2 == 0 ? trans('app.No') : trans('app.Yes') }}</p>
                <p>{{trans('app.Kraft Cube')}} - {{ $object->product3 == 0 ? trans('app.No') : trans('app.Yes') }}</p>
                <p>{{trans('app.Kraft LED')}} - {{ $object->product4 == 0 ? trans('app.No') : trans('app.Yes') }}</p>
                <p>{{trans('app.Block OWA')}} - {{ $object->product5 == 0 ? trans('app.No') : trans('app.Yes') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                @if($object->photo1 != null)
                    <a data-toggle="lightbox" href="#demoLightbox1">
                        <img src="/uploads/objects/{{$object->photo1}}" class="small-img">
                    </a>
                    <div id="demoLightbox1" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/objects/{{$object->photo1}}">
                                <div class='lightbox-caption'>
                                    {{trans('app.Report')}} 1
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($object->photo2 != null)
                    <a data-toggle="lightbox" href="#demoLightbox2">
                        <img src="/uploads/objects/{{$object->photo2}}" class="small-img">
                    </a>
                    <div id="demoLightbox2" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/objects/{{$object->photo2}}">
                                <div class='lightbox-caption'>
                                    {{trans('app.Report')}} 2
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($object->photo3 != null)
                    <a data-toggle="lightbox" href="#demoLightbox3">
                        <img src="/uploads/objects/{{$object->photo3}}" class="small-img">
                    </a>
                    <div id="demoLightbox3" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/objects/{{$object->photo3}}">
                                <div class='lightbox-caption'>
                                    {{trans('app.Report')}} 3
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($object->photo4 != null)
                    <a data-toggle="lightbox" href="#demoLightbox4">
                        <img src="/uploads/objects/{{$object->photo4}}" class="small-img">
                    </a>
                    <div id="demoLightbox4" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/objects/{{$object->photo4}}">
                                <div class='lightbox-caption'>
                                    {{trans('app.Report')}} 4
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($object->photo5 != null)
                    <a data-toggle="lightbox" href="#demoLightbox5">
                        <img src="/uploads/objects/{{$object->photo5}}" class="small-img">
                    </a>
                    <div id="demoLightbox5" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/objects/{{$object->photo5}}">
                                <div class='lightbox-caption'>
                                    {{trans('app.Report')}} 5
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>

    <script>
        function chat() {

        }
    </script>
@endsection