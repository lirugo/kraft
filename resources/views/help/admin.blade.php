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
    <link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
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
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Hje6LfKphHk?autoplay=
                <?php echo !$played; ?>&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

                <?php
                //now we set video is played add the code below to the bottom of the php page
                $played_videos[$video_id]=1 ;
                //now we rebulid the cookie or set it
                setcookie( 'welu_autoplay' , serialize($played_videos) , time()+90000 , '/' );
                ?>
                </div>

                <p>
                    Вид кабинета по умолчанию открывается на вкладке «Панель управления». В левом верхнем углу можно переключаться между главной страницей и панелью управления. На главной странице будет информация о новостях компании, акциях и т.п.
                <img src="/img/help/admin/1.jpg" width="100%"/>
                </p>
                <p>Меню «Объекты» - вся информация о текущих объектах компании.</p>
                <p>Меню «Профиль компании» - возможность изменить данные компании.</p>
                <p>Меню «Пользователи компании» - список всех пользователей компании.</p>
                <p>Меню «Создать пользователя» - добавление нового пользователя компании.</p>
                <p>Меню «Просчет на склад» - калькулятор с возможностью заказа продукции без создания нового объекта. По состоянию на 01.08.2018 это меню пока недоступно.</p>
                <p>Меню «История просчетов» - все просчеты, которые совершали сотрудники компании.</p>
                <p>Кнопка «Написать в KRAFT». Эта форма предназначена для связи с руководством компании-производителя. Если у вас есть какие-либо предложения, пожелания или возникли проблемы при работе с нами - напишите нам, и мы рассмотрим Ваше обращение в ближайшее время.</p>

                <h3 class="text-primary">Меню «Профиль компании»</h3>
                <p><img src="/img/help/admin/2.jpg" width="100%"/></p>
                <p>В этом меню можно изменить или дополнить данные профиля компании. Все изменения отсылаются на модерацию Региональному менеджеру и вступают в силу только после его подтверждения. После внесения необходимых изменений нужно нажать справа внизу кнопку Update Profile.</p>

                <h3 class="text-primary">Меню «Профиль пользователя»</h3>
                <p><img src="/img/help/admin/3.jpg" width="100%"/></p>
                <p>В этом меню при необходимости пользователь может изменить свои личные данные. После изменения необходимых полей нажмите кнопку Update Profile. Измененные данные будут отосланы на модерацию Региональному Менеджеру «Крафт Декенсистем».</p>

                <h3 class="text-primary">Меню «Создать пользователя»</h3>
                <p><img src="/img/help/admin/4.jpg" width="100%"/></p>
                <p>В этом меню вы, как Администратор компании, можете добавить нового пользователя. Заполните все поля, добавьте фото (желательно квадратного формата) и нажмите кнопку «Создать». Данные будут отосланы на модерацию вашему Региональному Менеджеру. После проверки данных он активирует нового пользователя и тот получит доступ в личный кабинет под своим логином и паролем.
                    ВАЖНО! Сразу необходимо придумать надежный пароль, т.к. на данный момент нет возможности изменить пароль позднее. Длина пароля – не менее 6 символов.
                </p>
                <h3 class="text-primary">Меню «Обьекты»</h3>
                <p><img src="/img/help/admin/5.jpg" width="100%"/></p>
                <p>В этом меню можно просмотреть информацию обо всех Объектах Компании, а также создать новый Объект.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
@endsection