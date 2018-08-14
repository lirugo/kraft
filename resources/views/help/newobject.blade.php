@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="{{url('/help/admin')}}">Кабинет администратора</a>
                <a class="link-bread" href="{{url('/help/user')}}">Кабинет пользователя</a>
                <a class="link-bread" href="{{url('/help/newobject')}}">Создание нового объекта</a>
                <a class="link-bread" href="{{url('/help/regobject')}}">Меню объекта</a>
                <a class="link-bread" href="{{url('/help/order')}}">Просчет спецификации</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 m-t-20">
                <div id="video-wrap">

                    <?php             //get played ids from cookie if set , add this code to the top of php page
                    $played_videos=isset($_COOKIE[ 'welu_autoplay']) ? $_COOKIE[ 'welu_autoplay'] : array();
                    //unserialize the array if its serialized
                    $played_videos=( @unserialize($played_videos) )  ? @unserialize($played_videos) : $played_videos;
                    //vedio id
                    $video_id='S360iO_u14Y' ;
                    //now check if its played before
                    $played=( isset($played_videos[$video_id]) ) ? 1 : 0;
                    ?>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/i0_PKEHSvAQ?autoplay=
                <?php echo !$played; ?>&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

                    <?php
                    //now we set video is played add the code below to the bottom of the php page
                    $played_videos[$video_id]=1 ;
                    //now we rebulid the cookie or set it
                    setcookie( 'welu_autoplay' , serialize($played_videos) , time()+90000 , '/' );
                    ?>
                </div>

                <h3 class="text-primary">Для чего нужна регистрация Объекта?</h3>
                <p>Регистрация объекта требуется для того, чтобы на одном объекте не пересекались интересы различных Дистрибьюторов. Если вы зарегистрировали Объект раньше всех, то Объект будет закреплен за вашей компанией и другие Дистрибьюторы на смогут его зарегистрировать повторно.<span class="text-danger"> Поэтому внимательно и максимально полно заполняйте все регистрационные данные, чтобы мы могли правильно идентифицировать ваш Объект.</span></p>

                <h3 class="text-primary">Отчеты по Объекту</h3>
                <p>В зависимости от предположительных сроков поставки продукции на Объект вы должны будете сдавать отчеты Региональному менеджеру о проводимой на Объекте работе. Периодичность отчетов задает Региональный Менеджер при регистрации нового Объекта. Напоминание о необходимости сдачи отчета будет отображаться в вашем кабинете.</p>
                <p>Если по Объекту не проводится работа, или не вовремя сдаются отчеты, то Региональный Менеджер <span class="text-danger"> имеет возможность передать Объект другому Дистрибьютору.</span></p>

                <h3 class="text-primary">Регистрация нового Объекта</h3>
                <p>Из панели управления переходим в меню «Объекты»</p>
                <p><img src="/img/help/newobject/1.jpg" width="100%"/></p>
                <p>Нажимаем кнопку «Новый объект»</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection