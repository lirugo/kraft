@extends('layouts.app')

@section('stylesheets')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/jquery.steps.css">
@endsection

@section('content')
    <div class="container-fluid m-t-20">
        <div class="row m-b-20">
            <div class="col-md-12">
                <form id="my-form" method="post">
                    <div>
                        <h3>Register company</h3>
                        <section>
                            <div class="col-md-4">
                                {!! Form::label('label','Profile company') !!}
                                {!! Form::text('companyname', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Company name']) !!}
                                {!! Form::text('city', null , ['class' => 'form-control m-t-20', 'placeholder' => 'City']) !!}
                                {!! Form::text('street', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Street']) !!}

                                <div class="col-md-4">
                                    {!! Form::text('house', null , ['class' => 'form-control form-inline m-t-20', 'placeholder' => 'House']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('housing', null , ['class' => 'form-control form-inline m-t-20', 'placeholder' => 'Housing']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('office', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Office']) !!}
                                </div>
                                {!! Form::label('label','Communications',['class' => 'm-t-20']) !!}
                                {!! Form::text('phone', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Phone']) !!}
                                {!! Form::text('fax', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Fax']) !!}
                                {!! Form::text('smartphone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Smart phone']) !!}
                                {!! Form::text('email', null , ['class' => 'form-control m-t-20 required', 'placeholder' => 'Email']) !!}

                            </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Financial requisites') !!}
                                {!! Form::text('bank', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Bank']) !!}
                                {!! Form::text('mfo', null , ['class' => 'form-control m-t-20', 'placeholder' => 'MFO']) !!}
                                {!! Form::text('settlementaccount', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Settlement account']) !!}
                                {!! Form::text('okpo', null , ['class' => 'form-control m-t-20', 'placeholder' => 'OKPO']) !!}

                                {!! Form::label('label','Law address', ['class' => 'm-t-20']) !!}
                                {!! Form::text('lawcity', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Law City']) !!}
                                {!! Form::text('lawstreet', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Street']) !!}
                                <div class="col-md-4">
                                    {!! Form::text('lawhouse', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law House']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('lawhousing', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Housing']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::text('lawoffice', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Office']) !!}
                                </div>
                                 </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Financial requisites') !!}
                                {!! Form::text('lawphone', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Law Phone']) !!}
                                {!! Form::text('lawfax', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Fax']) !!}

                                {!! Form::label('label','You must upload your documents.', ['class' => 'm-t-20']) !!}
                                <br>
                                <label class="btn btn-default">
                                    <i class="fa fa-plus"></i>
                                    <input type="file" name="scandoc1" hidden>
                                </label>
                                <label class="btn btn-default">
                                    <i class="fa fa-plus"></i>
                                    <input type="file" name="scandoc2" hidden>
                                </label>
                                <label class="btn btn-default">
                                    <i class="fa fa-plus"></i>
                                    <input type="file" name="scandoc3" hidden>
                                </label>
                                <label class="btn btn-default">
                                    <i class="fa fa-plus"></i>
                                    <input type="file" name="scandoc4" hidden>
                                </label>
                                <label class="btn btn-default">
                                    <i class="fa fa-plus"></i>
                                    <input type="file" name="scandoc5" hidden>
                                </label>
                            </div>
                        </section>
                        <h3>Register User</h3>
                        <section>
                            <div class="col-md-4">

                                {!! Form::label('label','Financial requisites') !!}
                                {!! Form::text('name', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Name']) !!}
                                {!! Form::text('surname', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Surname']) !!}
                                {!! Form::text('patronymic', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Patronymic']) !!}
                                {!! Form::text('dateofbirth', '1990-09-09' , ['class' => 'form-control m-t-20', 'placeholder' => 'Date of birth']) !!}

                                {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'form-control m-t-20']); !!}

                                {!! Form::text('phone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Phone']) !!}
                                {!! Form::email('email', null,['class' => 'form-control m-t-20 ',   'placeholder' => 'Email']) !!}


                            </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Password') !!}
                                {!! Form::password('password', ['class' => 'form-control m-t-10' , 'placeholder' => 'Password']) !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control m-t-20', 'placeholder' => 'Confirm Password']) !!}

                                {!! Form::label('label','Financial requisites', ['class' => 'm-t-20']) !!}
                                <br>
                                <label class="btn btn-default">
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
                </form>
            </div>

        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/jquery.steps.js"></script>
    <script src="/js/script.js"></script>
@endsection