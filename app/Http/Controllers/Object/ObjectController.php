<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObjectController extends Controller
{
    public function register(){
        $region = ['$region1','$region2'];
        $district = ['$district1','$district2'];
        $data = [
        'region' => $region,
        'district' => $district
        ];
        return view('object.register')->with('data', $data);
    }
}
