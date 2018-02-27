@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/designer/object/show">Объекты</a>
                <a class="link-bread" href="#">Регистрация</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::model(['route' =>['object.register'], 'method' => 'POST', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.objectdata'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('name',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => 'Name object *']) !!}
                            <select required name="region" class="form-control m-b-10">
                                <option value="" disabled selected>Выберите область</option>
                                <option value="12">Киевская область</option>
                                <option value="11">Житомирская область</option>
                                <option value="13">Черниговская область</option>

                                <option value="21">Днепропетровская область</option>
                                <option value="22">Донецкая область</option>
                                <option value="23">Запорожская область</option>
                                <option value="24">Луганская область</option>
                                <option value="25">Полтавская область</option>
                                <option value="26">Сумская область</option>
                                <option value="27">Харьковская область</option>

                                <option value="31">Винницкая область</option>
                                <option value="32">Кропивницкая область</option>
                                <option value="33">Николаевская область</option>
                                <option value="34">Одесская область</option>
                                <option value="35">Херсонская область</option>
                                <option value="36">Черкасская область</option>

                                <option value="41">Волынская область</option>
                                <option value="42">Закарпатская область</option>
                                <option value="43">Ивано-Франковская область</option>
                                <option value="44">Львовская область</option>
                                <option value="45">Ровненская область</option>
                                <option value="46">Тернопольская область</option>
                                <option value="47">Хмельницкая область</option>
                                <option value="48">Черновицкая область</option>
                            </select>
                            {!! Form::text('city',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.city').' *', 'id' => 'city']) !!}
                            {!! Form::text('street',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.street').' *', 'id' => 'street']) !!}
                            {!! Form::text('house',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.house').' *', 'id' => 'street_number']) !!}
                            {!! Form::text('housing',null , ['class' => 'form-control m-b-10', 'required','placeholder' => "Корпус *", 'id' => 'street_number']) !!}


                            <hr>
                            {!! Form::text('sworks', null , ['class' => 'form-control','required', 'placeholder' => trans('app.sworks').' *']) !!}
                            <br>
                            <br>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product1" id="product1" value="1"/>
                                <div class="[ btn-group ]">
                                    <label for="product1" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product1" class="[ btn btn-default active ]">
                                        T-Профиль
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product2" id="product2" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product2" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product2" class="[ btn btn-default active ]">
                                        Грильято
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product3" id="product3" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product3" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product3" class="[ btn btn-default active ]">
                                        Крафт Куб
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product4" id="product4" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product4" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product4" class="[ btn btn-default active btn-block]">
                                        KRAFT LED
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product5" id="product5" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product5" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product5" class="[ btn btn-default active ]">
                                        Плиты OWA
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.customer'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('customer',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customer').' *']) !!}
                            {!! Form::text('customername',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customername').' *']) !!}
                            {!! Form::text('customersurname',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customersurname').' *']) !!}
                            {!! Form::text('customerpatronymic',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customerpatronymic').' *']) !!}
                            {!! Form::text('customerphone',null , ['class' => 'form-control m-b-10 ','required', 'pattern' => '(\+38)[ 0-9]{10}', 'title' => '+38 000 00 00','placeholder' => trans('app.customerpphone').' *']) !!}

                            {!! Form::label('label',trans('app.generalbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('generalbuilder',null , ['class' => 'form-control m-b-10','required', 'placeholder' => trans('app.generalbuilder').' *']) !!}
                            {!! Form::text('delegatebuilder',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.delegatebuilder')]) !!}
                            {!! Form::text('delegatebuildername',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.delegatebuildername')]) !!}
                            {!! Form::text('delegatebuildersurname',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.delegatebuildersurname')]) !!}
                            {!! Form::text('delegatebuilderpatronymic',null , ['class' => 'form-control m-b-10 ', 'placeholder' => trans('app.delegatebuilderpatronymic')]) !!}
                            {!! Form::text('delegatebuilderphone',null , ['class' => 'form-control m-b-10', 'pattern' => '(\+38)[ 0-9]{10}', 'title' => '+38 000 00 00','placeholder' => trans('app.delegatebuilderphone')]) !!}



                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.subbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('subbuilder',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuilder')]) !!}
                            {!! Form::text('subbuildername',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuildername')]) !!}
                            {!! Form::text('subbuildersurname',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuildersurname')]) !!}
                            {!! Form::text('subbuilderpatronymic',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuilderpatronymic')]) !!}
                            {!! Form::text('subbuilderphone',null , ['class' => 'form-control m-b-10','pattern' => '(\+38)[ 0-9]{10}', 'title' => '+38 000 00 00', 'placeholder' => trans('app.subbuilderphone')]) !!}

                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                {!! Form::label('label',trans('app.uploadphotoobject',['class' => 'm-t-20'])) !!}
                                <hr>
                                <div id="scanUpload" class="dropzone"></div>
                                <div id="boatAddForm"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Create Object',['class' => 'pull-right botton botton-primary botton-default m-t-10']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="/js/googlemapapi.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initMap">
    </script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#scanUpload", {
            url:'/upload/photo',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 5,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    $("#boatAddForm").append($('<input type="hidden" ' +
                        'name="photos[]" ' +
                        'value="' + response.success + '">'));
                })
            }
        });
    </script>
@endsection