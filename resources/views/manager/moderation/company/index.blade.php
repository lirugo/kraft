@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/moderation">{{ trans('app.Moderation') }}</a>
                <a class="link-bread" href="#">{{ trans('app.Company Profile') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($chs) == 0)
            <div class="col-md-12 text-center">
                <h1>{{ trans('app.There are no requests for profile changes.') }}</h1>
            </div>
            @endif
                @foreach($chs as $ch)
                <div class="col-md-5 col-md-offset-1">
                    <h2 class="text-center">{{ $ch->companyname }}
                        <span class="badge badge-light">{{$ch->count}}</span>
                        </h2>
                    <div class="col-md-6">
                        {{ trans('app.Old data') }}
                        <hr style="margin:0;">
                        <br>
                        {!! $ch->city != $ch->company->city ? '<p>'.trans('app.city').' - '.$ch->company->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p>'.trans('app.street').' - '.$ch->company->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p>'.trans('app.house').' - '.$ch->company->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p>'.trans('app.housing').' - '.$ch->company->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p>'.trans('app.office').' - '.$ch->company->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p>'.trans('app.Smart Phone').' - '.$ch->company->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p>'.trans('app.Phone').' - '.$ch->company->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p>'.trans('app.fax').' - '.$ch->company->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p>'.trans('app.Bank').' - '.$ch->company->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p>'.trans('app.MFO').' - '.$ch->company->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p>'.trans('app.Settlement account').' - '.$ch->company->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p>'.trans('app.OKPO').' - '.$ch->company->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p>'.trans('app.Law city').' - '.$ch->company->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p>'.trans('app.Law street').' - '.$ch->company->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p>'.trans('app.Law house').' - '.$ch->company->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p>'.trans('app.Law housing').' - '.$ch->company->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p>'.trans('app.Law office').' - '.$ch->company->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p>'.trans('app.Law phone').' - '.$ch->company->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p>'.trans('app.Law fax').' - '.$ch->company->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p>'.trans('app.Site').' - '.$ch->company->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p>'.trans('app.Social').' - '.$ch->company->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p>'.trans('app.Social').' - '.$ch->company->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p>'.trans('app.Social').' - '.$ch->company->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p>'.trans('app.Social').' - '.$ch->company->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p>'.trans('app.Social').' - '.$ch->company->social5.'</p>' : "" !!}
                    </div>
                    <div class="col-md-6">
                        {{ trans('app.New data') }}
                        <hr style="margin:0;">
                        <br>
                        {!! $ch->city != $ch->company->city ? '<p>'.trans('app.city').' - '.$ch->city.'</p>' : "" !!}
                        {!! $ch->street != $ch->company->street ? '<p>'.trans('app.street').' - '.$ch->street.'</p>' : "" !!}
                        {!! $ch->house != $ch->company->house ? '<p>'.trans('app.house').' - '.$ch->house.'</p>' : "" !!}
                        {!! $ch->housing != $ch->company->housing ? '<p>'.trans('app.housing').' - '.$ch->housing.'</p>' : "" !!}
                        {!! $ch->office != $ch->company->office ? '<p>'.trans('app.office').' - '.$ch->office.'</p>' : "" !!}
                        {!! $ch->smartphone != $ch->company->smartphone ? '<p>'.trans('app.Smart Phone').' - '.$ch->smartphone.'</p>' : "" !!}
                        {!! $ch->phone != $ch->company->phone ? '<p>'.trans('app.Phone').' - '.$ch->phone.'</p>' : "" !!}
                        {!! $ch->fax != $ch->company->fax ? '<p>'.trans('app.Fax').' - '.$ch->fax.'</p>' : "" !!}
                        {!! $ch->bank != $ch->company->bank ? '<p>'.trans('app.Bank').' - '.$ch->bank.'</p>' : "" !!}
                        {!! $ch->mfo != $ch->company->mfo ? '<p>'.trans('app.MFO').' - '.$ch->mfo.'</p>' : "" !!}
                        {!! $ch->settlementaccount != $ch->company->settlementaccount ? '<p>'.trans('app.Settlement Account').' - '.$ch->settlementaccount.'</p>' : "" !!}
                        {!! $ch->okpo != $ch->company->okpo ? '<p>'.trans('app.Law OKPO').' - '.$ch->okpo.'</p>' : "" !!}
                        {!! $ch->lawcity != $ch->company->lawcity ? '<p>'.trans('app.Law city').' - '.$ch->lawcity.'</p>' : "" !!}
                        {!! $ch->lawstreet != $ch->company->lawstreet ? '<p>'.trans('app.Law street').' - '.$ch->lawstreet.'</p>' : "" !!}
                        {!! $ch->lawhouse != $ch->company->lawhouse ? '<p>'.trans('app.Law house').' - '.$ch->lawhouse.'</p>' : "" !!}
                        {!! $ch->lawhousing != $ch->company->lawhousing ? '<p>'.trans('app.Law housing').' - '.$ch->lawhousing.'</p>' : "" !!}
                        {!! $ch->lawoffice != $ch->company->lawoffice ? '<p>'.trans('app.Law office').' - '.$ch->lawoffice.'</p>' : "" !!}
                        {!! $ch->lawphone != $ch->company->lawphone ? '<p>'.trans('app.Law phone').' - '.$ch->lawphone.'</p>' : "" !!}
                        {!! $ch->lawfax != $ch->company->lawfax ? '<p>'.trans('app.Law fax').' - '.$ch->lawfax.'</p>' : "" !!}
                        {!! $ch->site != $ch->company->site ? '<p>'.trans('app.Site').' - '.$ch->site.'</p>' : "" !!}
                        {!! $ch->social1 != $ch->company->social1 ? '<p>'.trans('app.Social').' - '.$ch->social1.'</p>' : "" !!}
                        {!! $ch->social2 != $ch->company->social2 ? '<p>'.trans('app.Social').' - '.$ch->social2.'</p>' : "" !!}
                        {!! $ch->social3 != $ch->company->social3 ? '<p>'.trans('app.Social').' - '.$ch->social3.'</p>' : "" !!}
                        {!! $ch->social4 != $ch->company->social4 ? '<p>'.trans('app.Social').' - '.$ch->social4.'</p>' : "" !!}
                        {!! $ch->social5 != $ch->company->social5 ? '<p>'.trans('app.Social').' - '.$ch->social5.'</p>' : "" !!}
                    </div>
                    <br>
                    <hr>
                    {!! Form::model($ch, ['route' => ['moderation.company.profile', $ch->id], 'method' => 'POST']) !!}
                    {!! Form::submit(trans('app.Confirm'), ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
                @endforeach
        </div>
    </div>
@endsection
