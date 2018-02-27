@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Профиль компании</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::model(['route' =>['company.change'], 'method' => 'POST', 'files' => true]) !!}
                                {!! Form::label('label','Company profile') !!}
                                <hr>
                                {!! Form::label('id', 'Company id', ['class' => 'm-t-10']) !!}
                                {!! Form::text('id', $company->id, ['class' => 'form-control','readonly']) !!}
                                {!! Form::label('companyname', 'Company name', ['class' => 'm-t-10']) !!}
                                {!! Form::text('companyname', $company->companyname, ['class' => 'form-control','readonly']) !!}
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
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('label','Law address') !!}
                                <hr>
                                {!! Form::label('lawcity', 'Law city', ['class' => 'm-t-10']) !!}
                                {!! Form::text('lawcity', $company->lawcity , ['class' => 'form-control required', 'placeholder' => 'Law City']) !!}
                                {!! Form::label('lawstreet', 'Law street', ['class' => 'm-t-10']) !!}
                                {!! Form::text('lawstreet', $company->lawstreet , ['class' => 'form-control required', 'placeholder' => 'Law Street']) !!}
                                <div class="col-md-4">
                                    {!! Form::label('lawhouse', 'Law House', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('lawhouse', $company->lawhouse , ['class' => 'form-control form-inline required', 'placeholder' => 'House']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('lawhousing', 'Law Housing', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('lawhousing', $company->lawhousing , ['class' => 'form-control form-inline required', 'placeholder' => 'Housing']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('lawoffice', 'Law Office', ['class' => 'm-t-10']) !!}
                                    {!! Form::text('lawoffice', $company->lawoffice , ['class' => 'form-control required', 'placeholder ' => 'Office']) !!}
                                </div>
                                {!! Form::label('lawphone', 'Law Phone', ['class' => 'm-t-20']) !!}
                                {!! Form::text('lawphone', $company->lawphone , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Phone']) !!}
                                {!! Form::label('lawfax', 'Law Fax', ['class' => 'm-t-10']) !!}
                                {!! Form::text('lawfax', $company->lawfax , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Law Fax']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('label','Contact information', ['class' => 'm-t-10']) !!}
                                <hr>
                                <div class="col-md-3">
                                {!! Form::label('phone', 'Phone', ['class' => 'm-t-10']) !!}
                                {!! Form::text('phone', $company->phone , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Phone']) !!}
                                </div>
                                <div class="col-md-3">
                                {!! Form::label('fax', 'Fax', ['class' => 'm-t-10']) !!}
                                {!! Form::text('fax', $company->fax , ['class' => 'form-control m-b-10 required', 'placeholder' => 'Fax']) !!}
                                </div>
                                <div class="col-md-3">
                                {!! Form::label('smartphone', 'Smartphone', ['class' => 'm-t-10']) !!}
                                {!! Form::text('smartphone', $company->smartphone, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-3">
                                {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                                {!! Form::text('email', $company->email,['class' => 'form-control m-b-10 required email', 'placeholder' => 'Email', 'readonly']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5><strong>Your documents</strong></h5>
                                <hr>
                                @if($company->scandoc1 != 'scandoc1')
                                <a data-toggle="lightbox" href="#demoLightbox">
                                    <img src="/uploads/scandocs/{{$company->scandoc1}}" class="small-img">
                                </a>
                                <div id="demoLightbox" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class='lightbox-dialog'>
                                        <div class='lightbox-content'>
                                            <img src="/uploads/scandocs/{{$company->scandoc1}}">
                                            <div class='lightbox-caption'>
                                                Scan document 1
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($company->scandoc1 != 'scandoc2')
                                <a data-toggle="lightbox" href="#demoLightbox2">
                                    <img src="/uploads/scandocs/{{$company->scandoc2}}" class="small-img">
                                </a>
                                <div id="demoLightbox2" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class='lightbox-dialog'>
                                        <div class='lightbox-content'>
                                            <img src="/uploads/scandocs/{{$company->scandoc2}}">
                                            <div class='lightbox-caption'>
                                                Scan document 2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($company->scandoc1 != 'scandoc3')
                                <a data-toggle="lightbox" href="#demoLightbox3">
                                    <img src="/uploads/scandocs/{{$company->scandoc3}}" class="small-img">
                                </a>
                                <div id="demoLightbox3" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class='lightbox-dialog'>
                                        <div class='lightbox-content'>
                                            <img src="/uploads/scandocs/{{$company->scandoc3}}">
                                            <div class='lightbox-caption'>
                                                Scan document 3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($company->scandoc1 != 'scandoc4')
                                <a data-toggle="lightbox" href="#demoLightbox4">
                                    <img src="/uploads/scandocs/{{$company->scandoc4}}" class="small-img">
                                </a>
                                <div id="demoLightbox4" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class='lightbox-dialog'>
                                        <div class='lightbox-content'>
                                            <img src="/uploads/scandocs/{{$company->scandoc4}}">
                                            <div class='lightbox-caption'>
                                                Scan document 4
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($company->scandoc1 != 'scandoc5')
                                <a data-toggle="lightbox" href="#demoLightbox5">
                                    <img src="/uploads/scandocs/{{$company->scandoc5}}" class="small-img">
                                </a>
                                <div id="demoLightbox5" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class='lightbox-dialog'>
                                        <div class='lightbox-content'>
                                            <img src="/uploads/scandocs/{{$company->scandoc5}}">
                                            <div class='lightbox-caption'>
                                                Scan document 5
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
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
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>

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