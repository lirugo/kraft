@extends('layouts.app')
@section('breads')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <chat-object-log :messages="msgsobject"></chat-object-log>
            <chat-object-composer curr_name="{{ Auth::user()->name }}" curr_surname="{{ Auth::user()->surname }}" v-on:messagesent="addObjectMessage"></chat-object-composer>
        </div>
    </div>
@endsection
