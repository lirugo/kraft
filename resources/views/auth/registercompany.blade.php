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
                    <h3>Register company</h3>
                    <section>
                        <div class="col-md-4">
                            {!! Form::label('label','Profile company') !!}
                            {!! Form::text('companyname', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Company name']) !!}
                            {!! Form::text('city', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'City']) !!}
                            {!! Form::text('street', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Street']) !!}

                            <div class="col-md-4">
                                {!! Form::text('house', null , ['class' => 'form-control form-inline m-b-10 required', 'placeholder' => 'House']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('housing', null , ['class' => 'form-control form-inline m-b-10 required', 'placeholder' => 'Housing']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('office', null , ['class' => 'form-control m-b-10 required', 'placeholder ' => 'Office']) !!}
                            </div>
                            {!! Form::label('label','Communications',['class' => 'm-b-10']) !!}
                            {!! Form::text('phone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Phone']) !!}
                            {!! Form::text('fax', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Fax']) !!}
                            {!! Form::text('smartphone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Smart phone']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label','Financial requisites') !!}
                            {!! Form::text('bank', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Bank']) !!}
                            {!! Form::text('mfo', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'MFO']) !!}
                            {!! Form::text('settlementaccount', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Settlement account']) !!}
                            {!! Form::text('okpo', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'OKPO']) !!}

                            {!! Form::label('label','Law address', ['class' => 'm-b-10']) !!}
                            {!! Form::text('lawcity', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law City']) !!}
                            {!! Form::text('lawstreet', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Street']) !!}
                            <div class="col-md-4">
                                {!! Form::text('lawhouse', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law House']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawhousing', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Housing']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::text('lawoffice', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Office']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label','Financial requisites') !!}
                            {!! Form::text('lawphone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Phone']) !!}
                            {!! Form::text('lawfax', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Fax']) !!}

                            {!! Form::label('label','You must upload your documents.') !!}
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

                            {!! Form::label('label','Financial requisites') !!}
                            {!! Form::text('name', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Name']) !!}
                            {!! Form::text('surname', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Surname']) !!}
                            {!! Form::text('patronymic', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Patronymic']) !!}
                            {!! Form::text('dateofbirth',null , ['class' => 'form-control m-b-10 required', 'id' => 'datepicker', 'placeholder' => 'YYYY/MM/DD']) !!}

                            {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'form-control m-b-10 required']); !!}

                            {!! Form::text('phone', null , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Phone']) !!}
                            {!! Form::email('email', null,['class' => 'form-control m-b-10 required email',   'placeholder' => 'Email']) !!}


                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label','Password') !!}
                            {!! Form::password('password', ['class' => 'form-control m-b-10 required' , 'placeholder' => 'Password']) !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control m-b-10 required', 'placeholder' => 'Confirm Password']) !!}

                            {!! Form::label('label','Financial requisites', ['class' => 'm-b-10']) !!}
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
                        <label for="acceptTerms">I agree with the Terms and Conditions.</label>
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