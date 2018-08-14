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
                <p>
                    <img src="/img/help/user/1.jpg" width="100%"/>
                    Вид кабинета по умолчанию открывается на вкладке «Панель управления». В левом верхнем углу можно переключаться между главной страницей и панелью управления. На главной странице будет информация о новостях компании, акциях и т.п.
                    Кнопка «Написать в KRAFT». Эта форма предназначена для связи с руководством компании-производителя. Если у вас есть какие-либо предложения, пожелания или возникли проблемы при работе с нами - напишите нам, и мы рассмотрим Ваше обращение в ближайшее время.
                </p>

                <p class="text-primary">Меню «Профиль пользователя»</p>
                <p><img src="/img/help/user/2.jpg" width="100%"/></p>
                <p>В этом меню при необходимости пользователь может изменить свои личные данные. После изменения необходимых полей нажмите кнопку Update Profile. Измененные данные будут отосланы на модерацию Региональному Менеджеру «Крафт Декенсистем».</p>

                <p class="text-primary">Меню «Обьекты»</p>
                <p><img src="/img/help/user/3.jpg" width="100%"/></p>
                <p>В этом меню можно просмотреть информацию обо всех Объектах Компании, а также создать новый Объект.</p>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection