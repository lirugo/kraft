@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/moderation">Модерация</a>
                <a class="link-bread" href="#">Профиль компании</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($chs) == 0)
            <div class="col-md-12 text-center">
                <h1>Запросов на изменение профиля - нет.</h1>
            </div>
            @endif
                @foreach($chs as $ch)
                <div class="col-md-5 col-md-offset-1">
                    <h2 class="text-center">{{ $ch->companyname }}
                        <span class="badge badge-light">{{$ch->count}}</span>
                        </h2>
                    <div class="col-md-6">
                        Старые данные
                        <hr style="margin:0;">
                        <br>
                        {!! $ch->city != $ch->company->city ? '<p>'.$ch->company->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p>'.$ch->company->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p>'.$ch->company->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p>'.$ch->company->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p>'.$ch->company->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p>'.$ch->company->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p>'.$ch->company->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p>'.$ch->company->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p>'.$ch->company->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p>'.$ch->company->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p>'.$ch->company->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p>'.$ch->company->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p>'.$ch->company->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p>'.$ch->company->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p>'.$ch->company->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p>'.$ch->company->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p>'.$ch->company->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p>'.$ch->company->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p>'.$ch->company->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p>'.$ch->company->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p>'.$ch->company->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p>'.$ch->company->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p>'.$ch->company->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p>'.$ch->company->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p>'.$ch->company->social5.'</p>' : "" !!}
                    </div>
                    <div class="col-md-6">
                        Новые данные
                        <hr style="margin:0;">
                        <br>
                        {!! $ch->city != $ch->company->city ? '<p>'.$ch->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p>'.$ch->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p>'.$ch->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p>'.$ch->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p>'.$ch->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p>'.$ch->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p>'.$ch->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p>'.$ch->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p>'.$ch->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p>'.$ch->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p>'.$ch->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p>'.$ch->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p>'.$ch->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p>'.$ch->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p>'.$ch->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p>'.$ch->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p>'.$ch->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p>'.$ch->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p>'.$ch->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p>'.$ch->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p>'.$ch->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p>'.$ch->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p>'.$ch->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p>'.$ch->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p>'.$ch->social5.'</p>' : "" !!}
                    </div>
                    <br>
                    <hr>
                    {!! Form::model($ch, ['route' => ['moderation.company.profile', $ch->id], 'method' => 'POST']) !!}
                    {!! Form::submit('Подтвердить', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
                @endforeach
        </div>
    </div>
@endsection
