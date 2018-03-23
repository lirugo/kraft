@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
    <form onsubmit="return validateMyForm();">
        <input type="text" required>
        {!! Form::submit('Расчитать',['class' => 'btn btn-primary m-t-20 pull-left m-b-20', 'id' => 'calc']) !!}

    </form>
@endsection

@section('scripts')
    <script>
        function validateMyForm() {
            return false;
        }
    </script>
@endsection