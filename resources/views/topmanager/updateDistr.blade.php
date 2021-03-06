@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Main')}}</a>
                <a class="link-bread" href="#">Список дистрибьюторов</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-sm-10 col-md-offset-1">
                {{$distributors->links()}}
                <label>* Оставьте поля пароля пустыми если не хотите его менять</label>
            </div>
            <tbody>
            @foreach($distributors as $distributor)
                <div class="col-md-4 col-md-offset-1">
                    <form action="/topmanager/distributor/update" method="POST">
                        <tr>
                            <td>
                                <label>Компания</label>
                                <input type="hidden" name="companyOld" value="{{$distributor->company}}" class="form-control" required>
                                <input type="text" name="company" value="{{$distributor->company}}" class="form-control" required>
                                <input type="text" name="email" value="{{$distributor->email}}" class="form-control" disabled>
                                <input type="hidden" name="userId" class="form-control" value="{{$distributor->id}}">
                                <input type="password" name="password" class="form-control" placeholder="Введите новый пароль" >
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Повторите новый пароль" >
                            </td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-danger m-t-10 pull-right">Обновить</button>
                            </td>
                        </tr>
                        <br/>
                        <hr>
                    </form>
                </div>
            @endforeach
            </tbody>
        </div>
    </div>
@endsection
