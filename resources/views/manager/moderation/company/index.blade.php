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
                        {!! $ch->city != $ch->company->city ? '<p> City - '.$ch->company->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p> Street - '.$ch->company->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p> House - '.$ch->company->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p> Housing - '.$ch->company->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p> Office - '.$ch->company->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p> Smart Phone - '.$ch->company->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p> Phone - '.$ch->company->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p> Fax - '.$ch->company->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p> Bank - '.$ch->company->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p> MFO - '.$ch->company->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p> Settlement Account - '.$ch->company->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p> OKPO - '.$ch->company->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p> Law City - '.$ch->company->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p> Law Street - '.$ch->company->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p> Law House - '.$ch->company->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p> Law Housing - '.$ch->company->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p> Law Office - '.$ch->company->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p> Law Phone - '.$ch->company->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p> Law Fax - '.$ch->company->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p> Site - '.$ch->company->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p> Social - '.$ch->company->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p> Social - '.$ch->company->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p> Social - '.$ch->company->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p> Social - '.$ch->company->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p> Social - '.$ch->company->social5.'</p>' : "" !!}
                    </div>
                    <div class="col-md-6">
                        Новые данные
                        <hr style="margin:0;">
                        <br>
                        {!! $ch->city != $ch->company->city ? '<p> City - '.$ch->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p> Street - '.$ch->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p> House - '.$ch->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p> Housing - '.$ch->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p> Offilce - '.$ch->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p> Smart Phone - '.$ch->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p> Phone - '.$ch->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p> Fax - '.$ch->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p> Bank - '.$ch->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p> MFO - '.$ch->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p> Settlement Account - '.$ch->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p> OKPO - '.$ch->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p> Law City - '.$ch->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p> Law Street - '.$ch->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p> Law House - '.$ch->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p> Law Housing - '.$ch->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p> Law Office - '.$ch->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p> Law Phone - '.$ch->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p> Law Fax - '.$ch->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p> Site - '.$ch->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p> Social - '.$ch->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p> Social - '.$ch->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p> Social - '.$ch->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p> Social - '.$ch->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p> Social - '.$ch->social5.'</p>' : "" !!}
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
