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
                <div style="height: 500px; overflow-y: scroll;" id="chat_dialog">
                    <input type="hidden" id="object_id" value="{{$object_id}}" />
                    <chat-object-log :messages="msgsobject"></chat-object-log>
                </div>
                <chat-object-composer curr_name="{{ Auth::user()->name }}" v-on:messagesent="addObjectMessage"></chat-object-composer>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function func() {
        var messages = document.getElementById('chat_dialog');
        messages.scrollTop = messages.scrollHeight;
    }
    setTimeout(func, 1000);
</script>
@endsection