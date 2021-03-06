@extends('layouts.app')

@section('stylesheets')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-1">
                <h1>Create a new message</h1>
                <form action="{{ route('messages.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <!-- Subject Form Input -->
                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required
                                   value="{{ old('subject') }}">
                        </div>

                        <!-- Message Form Input -->
                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea name="message" class="form-control" required>{{ old('message') }}</textarea>
                        </div>

                        @if($data['users']->count() > 0)
                            @if(Auth::user()->hasRole('distributor') || Auth::user()->hasRole('worker'))
                                <div class="checkbox">
                                    <select name="recipients[]" hidden class="form-control">
                                            <option selected value="{{$data['mUser']->last()->id}}">{{$data['mUser']->last()->name." ".$data['mUser']->last()->patronymic." ".$data['mUser']->last()->surname}}</option>
                                    </select>
                                    <p> Ваше сообщение будет доставлено: {{$data['mUser']->last()->name." ".$data['mUser']->last()->surname}}</p>
                                </div>
                            @elseif(Auth::user()->hasRole('manager'))
                                <div class="checkbox">
                                    <select name="recipients[]" class="form-control" required>
                                        <option value="">Выберите пользователя</option>
                                        @foreach($data['dUsers'] as $user)
                                            <option value="{{$user->id}}">{{$user->name." ".$user->patronymic." ".$user->surname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                            <div class="checkbox">
                                <select name="recipients[]" class="form-control" required>
                                    <option value="">Выберите пользователя</option>
                                    @foreach($data['users'] as $user)
                                        <option value="{{$user->id}}">{{$user->name." ".$user->patronymic." ".$user->surname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                        @endif

                        <!-- Submit Form Input -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection

