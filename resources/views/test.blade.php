@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('main') !!}
@endsection
@section('content')


    <select id="role_user" name="roleuser" class="form-control">
        <option id="" selected disabled>Select Role User</option>
        <option id="manager" value="manager">Manager</option>
        <option id="top-manager" value="top-manager">Top-Manager</option>
    </select>

    <div id="region" class="m-t-20">
            <p>Region</p>
            <select name="regionname" class="form-control">
                    <option>Center</option>
                    <option>East</option>
                    <option>South</option>
                    <option>West</option>
            </select>
    </div>



@endsection

@section('scripts')
    <script>
        $(function() {
            $("#role_user").change(function() {
                if ($("#manager").is(":selected")) {
                    $("#region").show();
                } else {
                    $("#region").hide();
                }
            }).trigger('change');
        });
    </script>
@endsection