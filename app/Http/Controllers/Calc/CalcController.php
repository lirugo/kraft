<?php

namespace App\Http\Controllers\Calc;

use App\CalcHistory;
use App\Constants;
use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use JavaScript;
use Session;

class CalcController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $object = Object::find($id);
        return view('calc.index')->with('object', $object);
    }

    public function tprofile($id){

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
        return view('calc.tprofile')->with('data', $data);
    }

    public function tprofilehistory(Request $request){
        $calcHistory = new CalcHistory();
            $calcHistory->object_id = $request->id;
            $calcHistory->type = $request->type;
            $calcHistory->tp3600 = $request->tp3600;
            $calcHistory->tp1200 = $request->tp1200;
            $calcHistory->tp600 = $request->tp600;
            $calcHistory->L3000 = $request->L3000;
            $calcHistory->susp = $request->susp;

            $calcHistory->tp3600_priceByOne = $request->tp3600_priceByOne;
            $calcHistory->tp1200_priceByOne = $request->tp1200_priceByOne;
            $calcHistory->tp600_priceByOne = $request->tp600_priceByOne;
            $calcHistory->L3000_priceByOne = $request->L3000_priceByOne;
            $calcHistory->susp_priceByOne = $request->susp_priceByOne;

            $calcHistory->tp3600_package = $request->tp3600_package;
            $calcHistory->tp1200_package = $request->tp1200_package;
            $calcHistory->tp600_package = $request->tp600_package;
            $calcHistory->L3000_package = $request->L3000_package;
            $calcHistory->susp_package = $request->susp_package;

            $calcHistory->tp3600_price = $request->tp3600_price;
            $calcHistory->tp1200_price = $request->tp1200_price;
            $calcHistory->tp600_price = $request->tp600_price;
            $calcHistory->L3000_price = $request->L3000_price;
            $calcHistory->susp_price = $request->susp_price;
            $calcHistory->sum = $request->sum;

        $calcHistory->save();
    }

    public function grilyato($id){
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
        return view('calc.grilyato')->with('data', $data);
    }

    public function cube($id){
        $object = Object::find($id);
        return view('calc.cube')->with('object', $object);
    }

    public function history($id){
        $calcs = CalcHistory::where('object_id', $id)->paginate(5);
        if($calcs->count() == 0){
            Session::flash('warning', 'Для начала сделайте свой первый расчет');
            return back();
        }
        return view('calc.history')->with('calcs', $calcs);
    }

    public function led($id){
        $object = Object::find($id);
        return view('calc.led')->with('object', $object);
    }
}
