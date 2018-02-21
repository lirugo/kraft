@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('objectshow') !!}
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
        <div class="row">
            <div class="col-md-4">
                Компания/Менеджер:
                {!! !empty($object->company) ? Form::label('Company Name', $object->company->companyname).", " : "" !!}
                {!! Form::label('Manager',$object->creator->patronymic." ".$object->creator->name) !!}
                <br>
                Региональный менеджер:
                {!! Form::label('RM',$object->rm->patronymic." ".$object->rm->name) !!}
                <br>
                Телефон РМ:
                {!! Form::label('RMPhone',$object->rm->phone) !!}
            </div>
            <div class="col-md-4">
                <strong>Дата Регистрации:</strong>
                {!! Form::label('Create Date', Carbon\Carbon::parse($object->created_at)->format('d.m.Y')) !!}
                <br>
                <div class="form-inline">
                    {!! Form::label('Дата поставки товара: ', null, ['class' => 'm-t-10']) !!}
                    {!! Form::text('dateofdelivery',null, ['class' => 'form-control', 'placeholder' => 'DD/MM/YYYY', 'id' => 'datepicker']) !!}
                </div>
                <br>
                {!! Form::model($object,['route' => ['manager.object.activate', $object->id], 'method' => 'POST']) !!}
                <div class="form-inline">
                    {!! Form::label('Переодичнось отчетов: каждые', null) !!}
                    {!! Form::select('reporttime', [
                    '7' => '7 Дней',
                    '14' => '14 Дней',
                    '30' => '30 Дней'
                    ],null, ['class' => 'form-control']) !!}
                </div>
                <strong> Дата Активации: </strong>
                {!! Form::label('Activate Date', empty($object->dateofactivate) ? " " : Carbon\Carbon::parse($object->dateofactivate)->format('d.m.Y')) !!}
                <br>
                <p>
                    <strong>До следующего отчета: </strong>
                    {{ $object->daystoreport ? $object->daystoreport." дней" : ""}}
                </p>
                <p>
                    <strong>Дата следующего отчета:</strong>
                    {!! Form::label('Date Report', empty($object->dateofreport) ? " " : Carbon\Carbon::parse($object->dateofreport)->format('d.m.Y')) !!}
                </p>
                @if($object->active == false)
                {!! Form::submit("Активировать", ['class' => 'btn btn-primary pull-right']) !!}
                @endif
                {!! Form::close() !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <hr>
                <p>
                    <strong>Данные объекта:</strong><br>
                    <strong>Название объекта:</strong> {{ $object->name }}<br>
                    <strong>Адрес объекта:</strong> {{ $object->city.", ".$object->street.", ".$object->house  }}<br>
                    <strong>Cумарная площадь планируемых работ:</strong> {{ $object->sworks }} м<sup>2</sup><br>
                </p>
                <p>
                    <strong>Заказчик (представитель заказчика):</strong> {{ $object->customepatronymic." ".$object->customername." ".$object->customersurname }}<br>
                    <strong>Генеральный подрядчик:</strong> {{ $object->generalbuilder }}<br>
                    <strong>Представитель генерального подрядчика:</strong> {{ $object->delegatebuilderpatronymic." ".$object->delegatebuildername." тел.".$object->delegatebuilderphone }}<br>
                </p>
                <p>
                    <strong>Субподрядчик:</strong> {{ $object->subbuilderpatronymic." ".$object->subbuildername." ".$object->subbuildersurname." тел.".$object->subbuilderphone  }}<br>
                    <strong>Архитектура:</strong> {{ $object->archpatronymic." ".$object->archname." ".$object->archsurname." тел.".$object->archphone  }}<br>
                    <strong>Дизайн:</strong> {{ $object->designpatronymic." ".$object->designname." ".$object->designsurname." тел.".$object->designphone  }}<br>
                </p>
                <p>
                    <strong>Комментарий:</strong> {{ $object->comments }}<br>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
                                    Report 1
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
                                    Report 2
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
                                    Report 3
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
                                    Report 4
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
                                    Report 5
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>

@endsection