@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chat Room
                    {{--<span class="badge pull-right">@{{ usersInRoom.length }}</span>--}}
                </div>
                <div class="panel-body">
                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messagesent="addMessage" curr_name="{{ Auth::user()->name }}" curr_surname="{{ Auth::user()->surname }}"></chat-composer>
                </div>
            </div>

    </div>
@endsection
