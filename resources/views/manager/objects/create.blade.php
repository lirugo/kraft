@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
                <a class="link-bread" href="/manager/objects">{{trans('app.Objects')}}</a>
                <a class="link-bread" href="#">{{trans('app.Create')}}</a>
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
                        {!! Form::model(['route' =>['manager.objects.create'], 'method' => 'POST', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.objectdata'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('name',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.Name Object').' *']) !!}
                            {!! Form::text('type',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.Type Object').' *']) !!}
                            <select required name="region" class="form-control m-b-10">
                                <option value="" disabled selected>{{trans('app.Select Region')}}</option>
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
                            {!! Form::number('house',null , ['class' => 'form-control m-b-10', 'required', 'min' => '1', 'placeholder' => trans('app.house').' *', 'id' => 'street_number']) !!}
                            {!! Form::text('housing',null , ['class' => 'form-control m-b-10','placeholder' => trans('app.office'), 'id' => 'street_number']) !!}
                            {!! Form::textarea('locationinformation',null , ['class' => 'form-control m-b-10', 'rows' => '2', 'placeholder' => trans('app.Additional Information'), 'id' => 'street_number']) !!}
                            <hr>
                            {!! Form::number('sworks', null , ['class' => 'form-control','required', 'min' => '10', 'placeholder' => trans('app.sworks').' *']) !!}
                            {!! Form::text('dateofdelivery', null , ['class' => 'form-control','required',  'id' => 'datepicker', 'placeholder' => trans('app.dateofdelivery').' *']) !!}

                            {!! Form::label('label',trans('app.Select the prospective products on object'), ['class' => 'm-t-20 text-center']) !!}
                            <select multiple class="form-control" name="products[]" style="height:110px;" required>
                                <option name="product1" value="product1">{{trans('app.T-Profile')}}</option>
                                <option name="product2" value="product2">{{trans('app.Grilyato')}}</option>
                                <option name="product3" value="product3">{{trans('app.Kraft Cube')}}</option>
                                <option name="product4" value="product4">{{trans('app.Kraft LED')}}</option>
                                <option name="product5" value="product5">{{trans('app.Block OWA')}}</option>
                            </select>
                            {{--<div class="[ form-group-checkbox  m-t-20 ]">--}}
                            {{--<input type="checkbox"  name="product1" id="product1" value="1"/>--}}
                            {{--<div class="[ btn-group ]">--}}
                            {{--<label for="product1" class="[ btn btn-default ]">--}}
                            {{--<span class="[ fa fa-plus ]"></span>--}}
                            {{--<span class="[ fa fa-minus ]"></span>--}}
                            {{--</label>--}}
                            {{--<label for="product1" class="[ btn btn-default active ]">--}}
                            {{--T-Профиль--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="[ form-group-checkbox  m-t-20 ]">--}}
                            {{--<input type="checkbox" name="product2" id="product2" value="1" />--}}
                            {{--<div class="[ btn-group ]">--}}
                            {{--<label for="product2" class="[ btn btn-default ]">--}}
                            {{--<span class="[ fa fa-plus ]"></span>--}}
                            {{--<span class="[ fa fa-minus ]"></span>--}}
                            {{--</label>--}}
                            {{--<label for="product2" class="[ btn btn-default active ]">--}}
                            {{--Грильято--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="[ form-group-checkbox  m-t-20 ]">--}}
                            {{--<input type="checkbox" name="product3" id="product3" value="1" />--}}
                            {{--<div class="[ btn-group ]">--}}
                            {{--<label for="product3" class="[ btn btn-default ]">--}}
                            {{--<span class="[ fa fa-plus ]"></span>--}}
                            {{--<span class="[ fa fa-minus ]"></span>--}}
                            {{--</label>--}}
                            {{--<label for="product3" class="[ btn btn-default active ]">--}}
                            {{--Крафт Куб--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="[ form-group-checkbox  m-t-20 ]">--}}
                            {{--<input type="checkbox" name="product4" id="product4" value="1" />--}}
                            {{--<div class="[ btn-group ]">--}}
                            {{--<label for="product4" class="[ btn btn-default ]">--}}
                            {{--<span class="[ fa fa-plus ]"></span>--}}
                            {{--<span class="[ fa fa-minus ]"></span>--}}
                            {{--</label>--}}
                            {{--<label for="product4" class="[ btn btn-default active btn-block]">--}}
                            {{--KRAFT LED--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="[ form-group-checkbox  m-t-20 ]">--}}
                            {{--<input type="checkbox" name="product5" id="product5" value="1" />--}}
                            {{--<div class="[ btn-group ]">--}}
                            {{--<label for="product5" class="[ btn btn-default ]">--}}
                            {{--<span class="[ fa fa-plus ]"></span>--}}
                            {{--<span class="[ fa fa-minus ]"></span>--}}
                            {{--</label>--}}
                            {{--<label for="product5" class="[ btn btn-default active ]">--}}
                            {{--Плиты OWA--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.customer'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('customer',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customer').' *']) !!}
                            {!! Form::text('customername',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customername').' *']) !!}
                            {!! Form::text('customerposition',null , ['class' => 'form-control m-b-10 ', 'placeholder' => trans('app.Position')]) !!}
                            {!! Form::text('customerphone',null , ['class' => 'form-control m-b-10 ','required', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX', 'placeholder' => trans('app.customerpphone').' *']) !!}

                            {!! Form::label('label',trans('app.generalbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('generalbuilder',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.generalbuilder')]) !!}
                            {!! Form::text('delegatebuilder',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.delegatebuilder')]) !!}
                            {!! Form::text('delegatebuildername',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.delegatebuildername')]) !!}
                            {!! Form::text('delegatebuilderphone',null , ['class' => 'form-control m-b-10', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX', 'placeholder' => trans('app.delegatebuilderphone')]) !!}

                            {!! Form::label('label',trans('app.subbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('subbuilder',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuilder')]) !!}
                            {!! Form::text('subbuildername',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.subbuildername')]) !!}
                            {!! Form::text('subbuilderphone',null , ['class' => 'form-control m-b-10', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX', 'placeholder' => trans('app.subbuilderphone')]) !!}

                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.architect'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('architectname',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.architectname')]) !!}
                            {!! Form::text('architectphone',null , ['class' => 'form-control m-b-10', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX', 'placeholder' => trans('app.architectphone')]) !!}

                            {!! Form::label('label',trans('app.design'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('designname',null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.designname')]) !!}
                            {!! Form::text('designphone',null , ['class' => 'form-control m-b-10', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX', 'placeholder' => trans('app.designphone')]) !!}

                            {{ Form::textarea('comments', null, ['class' => 'm-t-20','placeholder' => trans('app.comments')]) }}
                            <br>

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
                                {!! Form::submit(trans('app.Create Object'),['class' => 'pull-right botton botton-primary botton-default m-t-10']) !!}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    {{--<script src="/js/datepicker.js"></script>--}}
    <script src="/js/dropzone.js"></script>
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose:true,
            startDate: "today"
        });
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