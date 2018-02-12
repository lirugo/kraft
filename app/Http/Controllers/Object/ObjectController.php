<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ObjectController extends Controller
{
    public function show(){
        return view('object.show');
    }
    public function register(){
        $region = [
            'Киевская область',
            'Днепропетровская область',
            'Донецкая область',
            'Запорожская область',
            'Полтавская область',
            'Харьковская область',
            'Одесская область',
            'Луганская область',
            'г. Севастополь',
            'Николаевская область',
            'Черкасская область',
            'Львовская область',
            'Автономная Республика Крым',
            'Сумская область',
            'Кировоградская область',
            'Черниговская область',
            'Ивано-Франковская область',
            'Волынская область',
            'Ровненская область',
            'Винницкая область',
            'Херсонская область',
            'Хмельницкая область',
            'Житомирская область',
            'Закарпатская область',
            'Черновицкая область',
            'Тернопольская область',
        ];
        return view('object.register')->with('region', $region);
    }
}
