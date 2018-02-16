@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('main') !!}
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">



    <a data-toggle="lightbox" href="#demoLightbox">
        <img src="https://dummyimage.com/600x400/000/fff" class="small-img">
    </a>
    <div id="demoLightbox" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class='lightbox-dialog'>
            <div class='lightbox-content'>
                <img src="https://dummyimage.com/600x400/000/fff">
                <div class='lightbox-caption'>
                    Write here your caption here
                </div>
            </div>
        </div>
    </div>




</div>

    @endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
@endsection