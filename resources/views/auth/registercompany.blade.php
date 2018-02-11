@extends('layouts.app')

@section('stylesheets')
    <link rel="stylesheet" href="/css/jquery.steps.css">
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
                            {!! Form::text('companyname', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.companyname')]) !!}
                            {!! Form::text('city', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.city')]) !!}
                            {!! Form::text('street', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.street')]) !!}

                            <div class="col-md-4">
                                {!! Form::text('house', null , ['class' => 'form-control form-inline m-b-10 required', 'placeholder' => trans('app.house')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('housing', null , ['class' => 'form-control form-inline m-b-10 required', 'placeholder' => trans('app.housing')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('office', null , ['class' => 'form-control m-b-10 required', 'placeholder ' => trans('app.office')]) !!}
                            </div>
                            {!! Form::label('label',trans('app.communications'),['class' => 'm-b-10']) !!}
                            {!! Form::text('phone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.phone')]) !!}
                            {!! Form::text('fax', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.fax')]) !!}
                            {!! Form::text('smartphone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.smartphone')]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.financialrequisites')) !!}
                            {!! Form::text('bank', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.bank')]) !!}
                            {!! Form::text('mfo', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.mfo')]) !!}
                            {!! Form::text('settlementaccount', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.settlementaccount')]) !!}
                            {!! Form::text('okpo', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.okpo')]) !!}

                            {!! Form::label('label', trans('app.lawaddress'), ['class' => 'm-b-10']) !!}
                            {!! Form::text('lawcity', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawcity')]) !!}
                            {!! Form::text('lawstreet', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawstreet')]) !!}
                            <div class="col-md-4">
                                {!! Form::text('lawhouse', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawhouse')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawhousing', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawhousing')]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawoffice', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawoffice')]) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.financialrequisites')) !!}
                            {!! Form::text('lawphone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawphone')]) !!}
                            {!! Form::text('lawfax', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.lawfax')]) !!}

                            {!! Form::label('label',trans('app.uploaddocuments')) !!}
                            <br>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc1" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc2" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc3" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc4" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc5" hidden>
                            </label>
                        </div>
                    </section>
                    <h3>Register User</h3>
                    <section>
                        <div class="col-md-4">

                            {!! Form::label('label', trans('app.profileuser')) !!}
                            {!! Form::text('name', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.name')]) !!}
                            {!! Form::text('surname', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.surname')]) !!}
                            {!! Form::text('patronymic', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.patronymic')]) !!}
                            {!! Form::text('dateofbirth',null , ['class' => 'form-control m-b-10 required', 'id' => 'datepicker', 'placeholder' => trans('app.date')]) !!}

                            {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'form-control m-b-10 required']); !!}

                            {!! Form::text('phone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.phone')]) !!}
                            {!! Form::email('email', null,['class' => 'form-control m-b-10 required email',   'placeholder' => trans('app.email')]) !!}


                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label', trans('app.password')) !!}
                            {!! Form::password('password', ['class' => 'form-control m-b-10 required' , 'placeholder' => trans('app.password')]) !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.confirmpassword')]) !!}

                            <br>
                            <h5> You must upload your photo. </h5>
                            <hr>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="avatar" hidden>
                            </label>
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
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/jquery.steps.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
@endsection