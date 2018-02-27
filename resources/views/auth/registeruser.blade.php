@extends('layouts.app')
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['method' => 'POST', 'route' =>['register.user'], 'files' => true]) !!}
                {!! Form::label('label',trans('app.userprofile')) !!}
                <hr style="margin:0;">
                {!! Form::text('surname', null , ['class' => 'form-control', 'required', 'placeholder' => trans('app.surname')." *"]) !!}
                {!! Form::text('name', null , ['class' => 'form-control', 'required', 'placeholder' => trans('app.name')." *"]) !!}
                {!! Form::text('patronymic', null , ['class' => 'form-control', 'required', 'placeholder' => trans('app.patronymic')." *"]) !!}
                {!! Form::text('dateofbirth',null , ['class' => 'form-control','required',  'id' => 'datepicker', 'placeholder' => trans('app.date')." *"]) !!}
                {!! Form::select('sex', ['X' => trans('app.male'), 'Y' => trans('app.femele')], null, ['class' => 'form-control', 'required']); !!}
                <select required name="region" class="form-control">
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
                {!! Form::text('phone', null , ['class' => 'form-control', 'required','pattern' => '(\+38)[ 0-9]{10}', 'title' => '+38 000 00 00', 'placeholder' => trans('app.phone')."* +38"]) !!}
                {!! Form::email('email', null,['class' => 'form-control', 'required', 'placeholder' => trans('app.email')." *"]) !!}
                {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => trans('app.password')." *"]) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'placeholder' => trans('app.confirmpassword')." *"]) !!}
            </div>
            <div class="col-md-4">
                {!! Form::label('label', "Portfolio") !!}
                <hr style="margin:0;">
                {!! Form::text('site', null , ['class' => 'form-control m-b-10', 'placeholder' => "portfolio.com"]) !!}
                {!! Form::label('label', "Your web site") !!}
                <hr style="margin:0;">
                {!! Form::text('site', null , ['class' => 'form-control m-b-10', 'placeholder' => "website.com"]) !!}
                {!! Form::label('label', "Соц. сети") !!}
                <hr style="margin:0;">
                {!! Form::text('social1', null , ['class' => 'form-control', 'placeholder' => "facebook.com"]) !!}
                {!! Form::text('social2', null , ['class' => 'form-control', 'placeholder' => "twitter.com"]) !!}
                {!! Form::text('social3', null , ['class' => 'form-control m-b-10', 'placeholder' => "linkedin.com"]) !!}
                {!! Form::label('label',trans('app.uploadavatar')) !!}
                <hr style="margin:0; margin-bottom: 10px">
                {!! Form::hidden('avatar', null , ['class' => 'form-control m-t-20 m-b-20', 'id' => 'upl', 'placeholder' => 'avatar', 'readonly']) !!}
                <div id="iamgeUpload" class="dropzone text-center"></div>
            </div>
            <div class="col-md-4">
                {!! Form::label('label', "Текущее место работы") !!}
                <hr style="margin:0;">
                <select id="work_user" name="work_user" class="form-control" required>
                    <option value="" selected disabled>Текущее место работы</option>
                    <option id="work_company" name="work_company" value="company">На компанию</option>
                    <option id="work_himself" name="work_himself" value="himself">На себя</option>
                </select>
                <div id="company" class="m-t-10">
                    {!! Form::label('label', "Укажите информацию о компании") !!}
                    <hr style="margin:0;">
                    {!! Form::text('companyname', null , ['class' => 'form-control required', 'placeholder' => trans('app.companyname')." *"]) !!}
                    {!! Form::text('companycity', null , ['class' => 'form-control required', 'placeholder' => "Город *"]) !!}
                    {!! Form::text('companysite', null , ['class' => 'form-control required', 'placeholder' => "Сайт *"]) !!}
                </div>

                {!! Form::number('workexperience', null , ['class' => 'form-control m-b-10','required', 'min' => '1', 'placeholder' => "Стаж работы * - кол-во лет"]) !!}
                {!! Form::label('label', "Дополнительная информация") !!}
                <hr style="margin:0;">
                {{ Form::textarea('comments', null, ['class' => 'form-control m-t-20 m-b-10', 'placeholder' => trans('app.comments')]) }}

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                {!! Form::submit(trans('app.registration'), ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#iamgeUpload", {
            url:'/upload/avatar',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 1,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    document.getElementById('upl').value = response.success;
                })
            }
        });

        $(function() {
            $("#work_user").change(function() {
                if ($("#work_company").is(":selected")) {
                    $("#company").show();
                } else {
                    $("#company").hide();
                }
            }).trigger('change');
        });
    </script>
@endsection
