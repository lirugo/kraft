@extends('layouts.app')
@section('stylesheets')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <style>
        .select2-container--default .select2-selection--single {border: none; height: 35px; border-bottom: 1px solid #c7c7c7; border-radius: 0;}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="form-inline">
                <select class="icons_select2">
                    <option value="+38" data-icon="ua">+38</option>
                    <option value="+7" data-icon="ru">+7</option>
                </select>
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'XXX XXX XX XX']) !!}
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

    <script>
        function iformat(icon) {
            var originalOption = icon.element;
            return $('<span><img src="/img/icon/flags/'+$(originalOption).data('icon')+'.png"/> ' + icon.text + '</span>');
        }
        $('.icons_select2').select2({
            width:80,
            minimumResultsForSearch: -1,
            templateSelection: iformat,
            templateResult: iformat,
            allowHtml: true
        });
        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
    </script>
@endsection
