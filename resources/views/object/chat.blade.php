@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" onclick="window.history.back()" href="#">Назад</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" id="object_id" value="{{$object_id}}" />
                <chat-object-log :messages="msgsobject"></chat-object-log>
                <chat-object-composer curr_name="{{ Auth::user()->name }}" curr_surname="{{ Auth::user()->surname }}" v-on:messagesent="addObjectMessage"></chat-object-composer>
            </div>
        </div>
    </div>
@endsection