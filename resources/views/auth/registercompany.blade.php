@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Step 1 - Register Company</h1>
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['method' => 'POST', 'route' =>['register.company'], 'files' => true]) !!}

                {!! Form::label('label','Profile company') !!}
                {!! Form::text('companyname', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Company name']) !!}
                {!! Form::text('city', null , ['class' => 'form-control m-t-20', 'placeholder' => 'City']) !!}
                {!! Form::text('street', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Street']) !!}
                {!! Form::text('house', null , ['class' => 'form-control m-t-20', 'placeholder' => 'House']) !!}
                {!! Form::text('housing', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Housing']) !!}
                {!! Form::text('office', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Office']) !!}

                {!! Form::label('label','Contact information', ['class' => 'm-t-20']) !!}
                {!! Form::text('phone', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Phone']) !!}
                {!! Form::text('fax', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Fax']) !!}
                {!! Form::text('smartphone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Smart phone']) !!}
                {!! Form::text('email', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Email']) !!}

            </div>

            <div class="col-md-4">
                {!! Form::label('label','Financial information') !!}
                {!! Form::text('bank', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Bank']) !!}
                {!! Form::text('mfo', null , ['class' => 'form-control m-t-20', 'placeholder' => 'MFO']) !!}
                {!! Form::text('settlementaccount', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Settlement account']) !!}
                {!! Form::text('okpo', null , ['class' => 'form-control m-t-20', 'placeholder' => 'OKPO']) !!}


                {!! Form::label('label','Law address',  ['class' => 'm-t-10']) !!}
                {!! Form::text('lawcity', null , ['class' => 'form-control m-t-10', 'placeholder' => 'Law City']) !!}
                {!! Form::text('lawstreet', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Street']) !!}
                {!! Form::text('lawhouse', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law House']) !!}
                {!! Form::text('lawhousing', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Housing']) !!}
                {!! Form::text('lawoffice', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Office']) !!}
                {!! Form::text('lawphone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Phone']) !!}
                {!! Form::text('lawfax', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Law Fax']) !!}

            </div>
            <div class="col-md-4">
                <h5> <strong>You must upload your photo. </strong></h5>
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
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
                {!! Form::submit('Next Step', ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
