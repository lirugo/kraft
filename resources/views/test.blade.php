@extends('layouts.app')
@section('stylesheets')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">


@endsection

@section('content')
    <div class="form-group">
        <label for="sel2">Mutiple select list (hold shift to select more than one):</label>
        <select multiple class="form-control" id="sel2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

    <script>

    </script>
@endsection
