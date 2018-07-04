@extends('layouts.app')
@section('stylesheets')

@endsection

@section('content')


@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            var obj = {
                val1: "this",
                val2: "that"
            };
            obj.val3 = 'these';
            obj['val4'] = 'those';

            $.ajax({
                type: "POST",
                url: "http://10.200.5.44/ERP/hs/ExchengeKalk/",
                data: {
                    "_token": "{{ csrf_token() }}",
                    json: JSON.stringify(obj)
                },
                success: function (response) {
                    //service.php response
                    console.log(response);
                }
            });
        });
    </script>
@endsection
