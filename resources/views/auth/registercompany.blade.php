@extends('layouts.app')

@section('stylesheets')
    <link rel="stylesheet" href="/css/jquery.steps.css">
    <link href="/css/dropzone.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid m-t-20">
        <div class="row m-b-20">
            <div class="col-md-12">
                {!! Form::open(['id' => 'registercompany', 'method' => 'post', 'enctype' => ' multipart/form-data', 'files' => true]) !!}
                <div>
                    <h3>{{ trans('app.registercompany') }}</h3>
                    <section>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.profilecompany')) !!}
                            {!! Form::text('companyname', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.companyname')." *"]) !!}

                            <select required name="region" class="form-control m-b-10">
                                <option value="" disabled selected>{{ trans('app.select region') }}</option>
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

                            {!! Form::text('city', null , ['class' => 'form-control m-b-10 lettersonly required', 'placeholder' => trans('app.city')." *"]) !!}
                            {!! Form::text('street', null , ['class' => 'form-control m-b-10 lettersonly required', 'placeholder' => trans('app.street')." *"]) !!}

                            <div class="col-md-4">
                                {!! Form::text('house', null , ['class' => 'form-control form-inline m-b-10 number required', 'placeholder' => trans('app.house')." *"]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('housing', null , ['class' => 'form-control form-inline m-b-10', 'placeholder' => trans('app.housing')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('office', null , ['class' => 'form-control m-b-10 number', 'placeholder ' => trans('app.office')]) !!}
                            </div>
                            {!! Form::label('label',trans('app.communications'),['class' => 'm-b-10']) !!}
                            {!! Form::text('phonecompany', null , ['class' => 'form-control m-b-10 phone required', 'placeholder' => trans('app.phone')." *"]) !!}
                            {!! Form::text('fax', null , ['class' => 'form-control m-b-10 number', 'placeholder' => trans('app.fax')]) !!}
                            {!! Form::text('smartphone', null , ['class' => 'form-control m-b-10 phone', 'placeholder' => trans('app.smartphone').""]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.financialrequisites')) !!}
                            {!! Form::text('bank', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.bank')." *"]) !!}
                            {!! Form::number('mfo', null , ['class' => 'form-control m-b-10 required', 'min' => '0', 'placeholder' => trans('app.mfo')." *"]) !!}
                            {!! Form::number('settlementaccount', null , ['class' => 'form-control m-b-10 required', 'min' => '0', 'placeholder' => trans('app.settlementaccount')." *"]) !!}
                            {!! Form::text('okpo', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.okpo')." *"]) !!}

                            {!! Form::label('label', trans('app.lawaddress'), ['class' => 'm-b-10']) !!}
                            {!! Form::text('lawcity', null , ['class' => 'form-control m-b-10 lettersonly required', 'placeholder' => trans('app.lawcity')." *"]) !!}
                            {!! Form::text('lawstreet', null , ['class' => 'form-control m-b-10 lettersonly required', 'placeholder' => trans('app.lawstreet')." *"]) !!}
                            <div class="col-md-4">
                                {!! Form::text('lawhouse', null , ['class' => 'form-control m-b-10 number required', 'placeholder' => trans('app.lawhouse')." *"]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawhousing', null , ['class' => 'form-control m-b-10', 'placeholder' => trans('app.lawhousing')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawoffice', null , ['class' => 'form-control m-b-10 number', 'placeholder' => trans('app.lawoffice')]) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label', "Телефон  бухгалтерии") !!}
                            {!! Form::text('lawphone', null , ['class' => 'form-control m-b-10 required phone', 'placeholder' => trans('app.lawphone')." *"]) !!}
                            {!! Form::label('label', "Web site company") !!}
                            {!! Form::text('site', null , ['class' => 'form-control m-b-10', 'placeholder' => "website.com"]) !!}
                            {!! Form::label('label', "Соц. сети") !!}
                            {!! Form::text('social1', null , ['class' => 'form-control m-b-10', 'placeholder' => "facebook.com"]) !!}
                            {!! Form::text('social2', null , ['class' => 'form-control m-b-10', 'placeholder' => "twitter.com"]) !!}
                            {!! Form::text('social3', null , ['class' => 'form-control m-b-10', 'placeholder' => "linkedin.com"]) !!}
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                {!! Form::label('label',trans('app.uploaddocuments')) !!}
                                <br>
                                <div id="scanUpload" class="dropzone">
                                    <div class="dz-message" data-dz-message><span>Only - *.jpg, *.png, *.gif, *.pdf</span></div>
                                </div>
                                <div id="boatAddForm"></div>
                            </div>
                        </div>
                    </section>
                    <h3>Register User</h3>
                    <section>
                        <div class="col-md-4">
                            {!! Form::label('label', trans('app.profileuser')) !!}
                            {!! Form::text('name', null , ['class' => 'form-control m-b-10 lettersonly required', 'placeholder' => trans('app.name')." *"]) !!}
                            {!! Form::text('dateofbirth',null , ['class' => 'form-control m-b-10 required', 'id' => 'datepicker', 'placeholder' => trans('app.date')." *"]) !!}
                            {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'form-control m-b-10 required']); !!}
                            {!! Form::text('phone', null , ['class' => 'form-control m-b-10 required phone', 'placeholder' => trans('app.phone')." *"]) !!}
                            {!! Form::email('email', null,['class' => 'form-control m-b-10 required email', 'placeholder' => trans('app.email')." *"]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label', trans('app.password')) !!}
                            {!! Form::password('password', ['class' => 'form-control m-b-10 password required', 'id' => 'password', 'placeholder' => trans('app.password')." *"]) !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control m-b-10 password_confirmation required', 'id' => 'password_confirmation', 'placeholder' => trans('app.confirmpassword')." *"]) !!}

                            <br>
                            <h5> You must upload your photo. </h5>
                            <hr>
                            {!! Form::text('avatar', null , ['class' => 'form-control m-t-20 m-b-20', 'hidden', 'id' => 'upl', 'placeholder' => 'avatar', 'readonly']) !!}
                            <div id="iamgeUpload" class="dropzone">
                                <div class="dz-message" data-dz-message><span>Only - *.jpg, *.png, *.gif, *.pdf</span></div>
                            </div>
                        </div>

                    </section>
                    <h3>Confirmation</h3>
                    <section>
                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                        <label for="acceptTerms">{{ trans('app.agreement') }}</label>
                    </section>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.steps.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    {{--<script src="/js/datepicker.js"></script>--}}
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose:true,
            defaultViewDate: {
                year: 1980,
                month: 0,
                day: 1
            }
        });
    </script>
    <script type="text/javascript">
        //Errors message for JQuery validate
        {{--window.translations = {--}}
            {{--required: '{{ trans('app.home') }}',--}}
            {{--number: '{{ trans('get.your.other.translation.here') }}',--}}
            {{--phone: '{{ trans('get.your.other.translation.here') }}',--}}
            {{--lettersonly: '{{ trans('get.your.other.translation.here') }}'--}}
        {{--};--}}
        {{--jQuery.extend(jQuery.validator.messages, {--}}
            {{--required:  window.translations.required,--}}
            {{--number: window.translations.number--}}
        {{--});--}}
        jQuery.validator.addMethod("password", function(value, element) {
            if(value !== $("#password_confirmation").val())
                return this.optional( element )
            else
                return /.{6,}/.test( value );
        }, 'Min lenght 6 or passwords do not match');
        jQuery.validator.addMethod("password_confirmation", function(value, element) {
            if(value !== $("#password").val())
                return this.optional( element )
            else
                return /.{6,}/.test( value );
        }, 'Min lenght 6 or passwords do not match');
        jQuery.validator.addMethod("phone", function(value, element) {
            return this.optional( element ) || /^(\+380)[0-9]{9}$/.test( value );
        }, 'Format phone +380XXXXXXXXX.');
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[а-яА-ЯёЁіІїЇa-zA-Z ]+$/i.test(value);
        }, "Letters only please");

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#iamgeUpload", {
            url:'/upload/avatar',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            maxFiles: 1,
            // addRemoveLinks: true,
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
        var myDropzone = new Dropzone("div#scanUpload", {
            url:'/upload/scan',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            maxFiles: 5,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    var fileName = JSON.parse(file.xhr.response).success;
                    console.log(fileName);
                    $("#boatAddForm").append($('<input type="hidden" ' +
                        'name="scans[]" ' +
                        'value="' + response.success + '">'));

                    //set icon for pdf
                    var ext = file.name.split('.').pop();

                    if (ext == "pdf") {
                        $(file.previewElement).find(".dz-image img").attr("src", "/img/logo/dropzone/pdf.png");
                    }
                });
            }
        });
        // Get file extension
        function checkFileExt(filename){
            filename = filename.toLowerCase();
            return filename.split('.').pop();
        }
    </script>
@endsection