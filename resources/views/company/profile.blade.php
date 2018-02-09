@extends('layouts.app')

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">{{ $company->companyname }} Profile</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('label','Company profile') !!}
                                <hr>
                                {!! Form::label('companyname', 'Company name', ['class' => 'm-t-10']) !!}
                                {!! Form::text('companyname', $company->companyname, ['class' => 'form-control']) !!}
                                {!! Form::label('city', 'City', ['class' => 'm-t-10']) !!}
                                {!! Form::text('city', $company->city, ['class' => 'form-control']) !!}
                                {!! Form::label('street', 'Street', ['class' => 'm-t-10']) !!}
                                {!! Form::text('street', $company->street, ['class' => 'form-control']) !!}
                                <div class="col-md-4">
                                    {!! Form::label('house', 'House', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('house', $company->house , ['class' => 'form-control form-inline required', 'placeholder' => 'House']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('housing', 'Housing', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('housing', $company->housing , ['class' => 'form-control form-inline required', 'placeholder' => 'Housing']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('office', 'Office', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('office', $company->office , ['class' => 'form-control required', 'placeholder ' => 'Office']) !!}
                                </div>
                                {!! Form::label('label','Contact information', ['class' => 'm-t-10']) !!}
                                <hr>
                                {!! Form::label('smartphone', 'Smartphone', ['class' => 'm-t-10']) !!}
                                {!! Form::text('smartphone', $company->smartphone, ['class' => 'form-control']) !!}
                                {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                                {!! Form::text('email', $company->email,['class' => 'form-control m-b-10 required email', 'placeholder' => 'Email', 'readonly']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Financial requisites') !!}
                                <hr>
                                {!! Form::label('bank', 'Bank', ['class' => 'm-t-10']) !!}
                                {!! Form::text('bank', $company->bank, ['class' => 'form-control required', 'placeholder' => 'Bank']) !!}
                                {!! Form::label('mfo', 'MFO', ['class' => 'm-t-10']) !!}
                                {!! Form::text('mfo', $company->mfo, ['class' => 'form-control required', 'placeholder' => 'MFO']) !!}
                                {!! Form::label('settlementaccount', 'Settlement account', ['class' => 'm-t-10']) !!}
                                {!! Form::text('settlementaccount', $company->settlementaccount , ['class' => 'form-control required', 'placeholder' => 'Settlement account']) !!}
                                {!! Form::label('okpo', 'OKPO', ['class' => 'm-t-10']) !!}
                                {!! Form::text('okpo', $company->okpo , ['class' => 'form-control required', 'placeholder' => 'OKPO']) !!}

                                {!! Form::label('label','Law address', ['class' => 'm-t-10']) !!}
                                <hr>
                                {!! Form::label('lawcity', 'Law city', ['class' => 'm-t-10']) !!}
                                {!! Form::text('lawcity', $company->lawcity , ['class' => 'form-control required', 'placeholder' => 'Law City']) !!}
                                {!! Form::label('lawstreet', 'Law street', ['class' => 'm-t-10']) !!}
                                {!! Form::text('lawstreet', $company->lawstreet , ['class' => 'form-control required', 'placeholder' => 'Law Street']) !!}
                                <div class="col-md-4">
                                    {!! Form::label('house', 'Law House', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('house', $company->lawhouse , ['class' => 'form-control form-inline required', 'placeholder' => 'House']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('housing', 'Law Housing', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('housing', $company->lawhousing , ['class' => 'form-control form-inline required', 'placeholder' => 'Housing']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('office', 'Law Office', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('office', $company->lawoffice , ['class' => 'form-control required', 'placeholder ' => 'Office']) !!}
                                </div>

                            </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Scan documents') !!}
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Update Profile', ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
@endsection