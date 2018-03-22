<?php

namespace App\Http\Controllers\Order;

use App\Constants;
use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use JavaScript;

class OrderController extends Controller
{
    public function index($id){
        $object = Object::find($id);
        $constants = Constants::get()->last();
        $data = new Collection;
        $data->put('object' , $object);
        $data->put('constants' , $constants);
        Javascript::put([
            'id' => $id,
            'easy' => $constants->easy,
            'hard' => $constants->hard,
            'tp3600c' => $constants->tp3600,
            'tp1200c' => $constants->tp1200,
            'tp600c' => $constants->tp600,
            'L3000c' => $constants->L3000,
            'suspc' => $constants->susp,
            'tp3600c_price' => $constants->tp3600_price,
            'tp1200c_price' => $constants->tp1200_price,
            'tp600c_price' => $constants->tp600_price,
            'L3000c_price' => $constants->L3000_price,
            'suspc_price' => $constants->susp_price,
            'tp3600c_pack' => $constants->tp3600_pack,
            'tp1200c_pack' => $constants->tp1200_pack,
            'tp600c_pack' => $constants->tp600_pack,
            'L3000c_pack' => $constants->L3000_pack,
            'suspc_pack' => $constants->susp_pack
        ]);
        return view('order.index')->with('data', $data);
    }

    public function tprofilevendor(Request $request){
        $profiles = DB::table('vendor_code_t_profiles')->where([
            ['model', $request->model],
            ['profile_thickness', $request->profile_thickness],
            ['color', $request->color]
        ])->get();

        $angles = DB::table('vendor_code_t_profile_angles')->where([
            ['profile', $request->wall_profile],
            ['color', $request->color]
        ])->get();

        $wireWithEars = DB::table('vendor_code_t_profile_susps')->where([
            ['model', "Дріт з вушком"],
            ['profile', $request->wire_with_ear],
        ])->get();

        $wireWithHooks = DB::table('vendor_code_t_profile_susps')->where([
            ['model', "Дріт з гаком"],
            ['profile', $request->wire_with_hook],
        ])->get();

        $springSusps = DB::table('vendor_code_t_profile_susps')->where([
            ['model', "Пружинный подвес"],
        ])->get();

        $collection = new Collection();
        foreach ($profiles as $profile)
            $collection->put($profile->profile, $profile);
        foreach ($angles as $angle)
            $collection->put('angle', $angle);
        foreach ($wireWithEars as $wireWithEar)
            $collection->put('wire_with_ear', $wireWithEar);
        foreach ($wireWithHooks as $wireWithHook)
            $collection->put('wire_with_hook', $wireWithHook);
        foreach ($springSusps as $springSusp)
            $collection->put('spring_susp', $springSusp);

        return $collection;
    }
}
