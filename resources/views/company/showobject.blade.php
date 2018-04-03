@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/distributor/objects">Объекты</a>
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
                                Заказ
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/order/{{$object->id}}/select">
                            <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                Мои заказы
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/report/{{$object->id}}">
                            <i class="fa fa-flag fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                Отчеты
                            </div>
                        </a>
                    </div>
                </div>
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
                <strong>Область:</strong> {{$object->getregion->regionname_ru}}<br>
                <strong>Город:</strong> {{$object->city}}<br>
                <strong>Улица:</strong> {{$object->street}}<br>
                <strong>Дом:</strong> {{$object->house}}<br>
                {{ !empty($object->housing) ? "Корпус: ".$object->housing : "" }}<br>
                {{ !empty($object->locationinformation) ? "Доп. информация: ".$object->locationinformation : "" }}<br>
            </div>
            <div class="col-md-4">
                <strong>Компания/Менеджер:</strong>
                {!! !empty($object->company) ? 'Company Name '.$object->company->companyname.", " : "" !!}
                {{$object->user->patronymic." ".$object->user->name}}
                <br>
                <strong>Региональный менеджер:</strong>
                {{$object->rmuser->patronymic." ".$object->rmuser->name}}
                <br>
                <strong>Телефон РМ:</strong>
                {{$object->rmuser->phone}}
            </div>
            <div class="col-md-4">
                <strong>Дата Регистрации:</strong>
                {!! Form::label('Create Date', Carbon\Carbon::parse($object->created_at)->format('d.m.Y')) !!}
                <br>
                    {!! Form::label('Дата поставки товара: ', null) !!}
                    {{ $object->dateofdelivery }}
                <br>
                <div class="form-inline">
                    {!! Form::label('Переодичнось отчетов: каждые', null) !!}
                    {{$object->reporttime}} дней
                </div>
                <strong> Дата Активации: </strong>
                {!! Form::label('Activate Date', empty($object->dateofactivate) ? " " : Carbon\Carbon::parse($object->dateofactivate)->format('d.m.Y')) !!}
                <br>
                <p>
                    @php
                        if($object->active == true){
                        $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                            if($reportdiff->invert == 0 && $reportdiff->days == 0)
                                echo "<strong>Отчет нужно сдать сегодня!</strong>";
                            else  if($reportdiff->invert == 1 && $reportdiff->days == 0)
                                echo "<strong>Отчет нужно сдать завтра!</strong>";
                            else  if($reportdiff->invert == 1)
                                echo "<strong>Дней осталось: </strong>".$reportdiff->days;
                            else  if($reportdiff->invert == 0)
                                echo "<strong>Дней просрочено: </strong>".$reportdiff->days;
                        }
                    @endphp
                </p>
                <p>
                    <strong>Дата следующего отчета:</strong>
                    {!! Form::label('Date Report', empty($object->reports->last()->dateofreport) ? " " : Carbon\Carbon::parse($object->reports->last()->dateofreport)->format('d.m.Y')) !!}
                </p>
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
                    <strong>Заказчик (представитель заказчика):</strong> {{ $object->customersurname." ".$object->customername." ".$object->customerpatronymic }}<br>
                    <strong>Генеральный подрядчик:</strong> {{ $object->generalbuilder }}<br>
                    <strong>Представитель генерального подрядчика:</strong> {{ $object->delegatebuilderpatronymic." ".$object->delegatebuildername." тел.".$object->delegatebuilderphone }}<br>
                </p>
                <p>
                    <strong>Субподрядчик:</strong> {{ $object->subbuildersurname." ".$object->subbuildername." ".$object->subbuilderpatronymic." тел.".$object->subbuilderphone  }}<br>
                    <strong>Архитектура:</strong> {{ $object->archsurname." ".$object->archname." ".$object->archpatronymic." тел.".$object->archphone  }}<br>
                    <strong>Дизайн:</strong> {{ $object->designsurname." ".$object->designname." ".$object->designpatronymic." тел.".$object->designphone  }}<br>
                </p>
                <p>
                    <strong>Комментарий:</strong> {{ $object->comments }}<br>
                </p>
            </div>
            <div class="col-md-4">
                <hr>
                <h4 class="text-center">Предполагаемая продукция</h4>
                <p>Т-Профиль - {{ $object->product1 === 0 ? "Нет" : "Да" }}</p>
                <p>Грильято - {{ $object->product2 === 0 ? "Нет" : "Да" }}</p>
                <p>Крафт КУБ - {{ $object->product3 === 0 ? "Нет" : "Да" }}</p>
                <p>Крафт LED - {{ $object->product4 === 0 ? "Нет" : "Да" }}</p>
                <p>Плиты OWA - {{ $object->product5 === 0 ? "Нет" : "Да" }}</p>
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
@endsection