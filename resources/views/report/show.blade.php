@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/report/{{$report->object->id}}">Отчеты</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">
    <style type="text/css">
        .lightbox{
            z-index: 1041;
        }
        .small-img{
            width:190px;
        }
    </style>
@endsection

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            Дата отчета: {{$report->dateofreport}}<br>
            Коментарий:
            {!! Form::textarea('comments', $report->comments, ['class' => 'form-control']) !!}
           <br>
           <br>
       </div>
   </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if($report->photo)
                @foreach($report->photo as $photo)
                    <a data-toggle="lightbox" href="#demoLightbox{{$photo->id}}">
                        <img src="/uploads/reports/{{$photo->name}}" class="small-img">
                    </a>
                    <div id="demoLightbox{{$photo->id}}" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
                        <div class='lightbox-dialog'>
                            <div class='lightbox-content'>
                                <img src="/uploads/reports/{{$photo->name}}">
                                <div class='lightbox-caption'>
                                    {{$photo->name}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <br>
            <br>
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
@endsection
