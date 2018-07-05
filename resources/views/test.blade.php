@extends('layouts.app')
@section('stylesheets')

@endsection

@section('content')
    <?php

    $data = array(
        "name" => "product1", "code" => "12345"
    );
    $data_string = json_encode($data);
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_PORT => "8384",
        CURLOPT_URL => "http://erp.kraftds.com:8384/ERP/hs/ExchengeKalk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data_string,
        CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            'Content-Type: application/json',
        ),
    ));
    curl_setopt($curl, CURLOPT_USERPWD, "Admin:3");
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
        dd($response);
    }
    ?>

@endsection


@section('scripts')


@endsection
