@extends('layouts.app')
@section('stylesheets')

@endsection

@section('content')
    <?php

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
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"text\"\r\n\r\nHere some test text from post \r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Postman-Token: c4883a14-6c87-4d30-a73e-779ba4f06492",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
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
