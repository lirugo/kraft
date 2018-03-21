@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Главная</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <select id="calculator" name="calculator" class="form-control" required>
                    <option value="" selected disabled>Выберите калькулятор</option>
                    <option id="t_profile" value="t_profile">T-Profile</option>
                </select>
                <hr>
            </div>
        </div>

        @include('order.calc.includes.tprofile')

    </div>
@endsection

@section('scripts')
<script src="/js/order/calc/tprofile.js"></script>
@endsection
