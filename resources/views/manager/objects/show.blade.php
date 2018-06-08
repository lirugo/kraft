@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/users">Список клиентов</a>
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
                        <a href="/order/{{$object->id}}/select">
                            <i class="fa fa-history fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                Заказы
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
{{--                @if(Auth::user()->id == $object->rmid)--}}
                    <div class="col-md-2 text-center">
                        <div class="card">
                            <a href="/object/{{ $object->id }}/chat" onclick="chat()">
                                <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                                <div class="description m-t-10">
                                    Чат с клиентом
                                </div>
                            </a>
                        </div>
                    </div>
                {{--@endif--}}
                <div class="col-md-2 text-center pull-right">
                    <div class="card">
                        {!! Form::open(['route' => ['manager.object.show.transfer',$object->id]]) !!}
                            {!! Form::select('manager', $managers, null, ['class' => 'form-control']) !!}
                            {!! Form::submit('Change', ['class' => 'btn btn-primary m-t-20 pull-right']) !!}
                        {!! Form::close() !!}
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
                {!! Form::model($object,['route' => ['manager.object.activate', $object->id], 'method' => 'POST']) !!}
                <div class="form-inline">
                    {!! Form::label('Дата поставки товара: ', null, ['class' => 'm-t-10']) !!}
                    {!! Form::text('dateofdelivery',null, ['class' => 'form-control', 'placeholder' => 'DD/MM/YYYY','required', 'id' => 'datepicker']) !!}
                </div>
                <div class="form-inline m-t-10">
                    {!! Form::label('Переодичнось отчетов: каждые', null) !!}
                    @if($object->active == false)
                    {!! Form::select('reporttime', [
                    '' => 'Выберите период',
                    '0' => 'Без отчета',
                    '7' => '7 Дней',
                    '14' => '14 Дней',
                    '30' => '30 Дней'
                    ],'', ['class' => 'form-control', 'required']) !!}
                    @else
                         {{$object->reporttime}} дней
                    @endif
                </div>
                <strong> Дата Активации: </strong>
                {!! Form::label('Activate Date', empty($object->dateofactivate) ? " " : Carbon\Carbon::parse($object->dateofactivate)->format('d.m.Y')) !!}
                <br>
                    <strong>До следующего отчета: </strong>
                    {{ $object->daystoreport ? $object->daystoreport." дней" : ""}}
                <br>
                    <strong>Дата следующего отчета:</strong>
                    {!! Form::label('Date Report', empty($object->dateofreport) ? " " : Carbon\Carbon::parse($object->dateofreport)->format('d.m.Y')) !!}
                <br>
                @if($object->active == false)
                {!! Form::submit("Активировать", ['class' => 'btn btn-primary pull-right']) !!}
                @else
                {!! Form::submit("Обновить", ['class' => 'btn btn-primary pull-right']) !!}
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
                    <strong>Заказчик (представитель заказчика):</strong> {{ $object->customesurname." ".$object->customername." ".$object->customerpatronymic }}<br>
                    <strong>Генеральный подрядчик:</strong> {{ $object->generalbuilder }}<br>
                    <strong>Представитель генерального подрядчика:</strong> {{ $object->delegatebuildersurname." ".$object->delegatebuildername." ".$object->delegatebuilderpatronymic." тел.".$object->delegatebuilderphone }}<br>
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
                <p>Т-Профиль - {{ $object->product1 == 0 ? "Нет" : "Да" }}</p>
                <p>Грильято - {{ $object->product2 == 0 ? "Нет" : "Да" }}</p>
                <p>Крафт КУБ - {{ $object->product3 == 0 ? "Нет" : "Да" }}</p>
                <p>Крафт LED - {{ $object->product4 == 0 ? "Нет" : "Да" }}</p>
                <p>Плиты OWA - {{ $object->product5 == 0 ? "Нет" : "Да" }}</p>
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
            </div>
        </div>
        <br>
    </div>
@endsection

@section('scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose:true,
            todayHighlight: true,
            startDate:"today"
        });
    </script>
@endsection