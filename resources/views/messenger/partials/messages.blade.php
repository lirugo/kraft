<div class="media">
    <a class="pull-left" href="#">
        <img src="/uploads/avatars/{{($message->user->avatar) }}"
             alt="{{ $message->user->name }}" class="img-circle" width="50px">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>