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

                <p><img src="/img/help/regobject/1.jpg" width="100%"/></p>
                <h3 class="text-primary">Меню «Заказ».</h3>
                <p><img src="/img/help/regobject/2.jpg" width="100%"/></p>
                <p>Здесь можно просчитать продукцию на калькуляторе, сохранить результаты расчетов и выписать счет.</p>

                <h3 class="text-primary">Меню «Мои заказы».</h3>
                <p><img src="/img/help/regobject/3.jpg" width="100%"/></p>
                <p>Здесь сохраняются результаты всех расчетов (спецификации). В любой момент спецификацию можно просмотреть, поправить и выписать счет.</p>

                <h3 class="text-primary">Меню «Отчеты»</h3>
                <p><img src="/img/help/regobject/4.jpg" width="100%"/></p>
                <p>Из этого меню подаются отчеты по работе над объектом. Отчеты автоматически отправляются вашему Региональному менеджеру.</p>

                <h3 class="text-primary">Меню «Задать вопрос»</h3>
                <p><img src="/img/help/regobject/5.jpg" width="100%"/></p>
                <p>Эта переписка (личный чат) с Региональным менеджером, если требуется уточнить какие-то вопросы.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection