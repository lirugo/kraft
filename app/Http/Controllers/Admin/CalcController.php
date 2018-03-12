<?php

namespace App\Http\Controllers\Admin;

use App\Constants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CalcController extends Controller
{
    public function index(){
        return view('admin.calc.index');
    }

    public function tprofile(){
        $constants = Constants::get()->last();
        return view('admin.calc.tprofile')->with('constants', $constants);
    }

    public function tprofileupdate(Request $request){
        //Validate
        $this->validate($request,[
            //Validate company profile
            'tp3600' => 'required',
            'tp1200' => 'required',
            'tp600' => 'required',
            'L3000' => 'required',
            'susp' => 'required',
            //price
            'tp3600_price' => 'required',
            'tp1200_price' => 'required',
            'tp600_price' => 'required',
            'L3000_price' => 'required',
            'susp_price' => 'required',
            //price
            'tp3600_pack' => 'required',
            'tp1200_pack' => 'required',
            'tp600_pack' => 'required',
            'L3000_pack' => 'required',
            'susp_pack' => 'required'
        ]);
        //SetData
        $constants = Constants::get()->last();
        $constants->tp3600 = $request->tp3600;
        $constants->tp1200 = $request->tp1200;
        $constants->tp600 = $request->tp600;
        $constants->L3000 = $request->L3000;
        $constants->susp = $request->susp;
        //Price
        $constants->tp3600_price = $request->tp3600_price;
        $constants->tp1200_price = $request->tp1200_price;
        $constants->tp600_price = $request->tp600_price;
        $constants->L3000_price = $request->L3000_price;
        $constants->susp_price = $request->susp_price;
        //Pack
        $constants->tp3600_pack = $request->tp3600_pack;
        $constants->tp1200_pack = $request->tp1200_pack;
        $constants->tp600_pack = $request->tp600_pack;
        $constants->L3000_pack = $request->L3000_pack;
        $constants->susp_pack = $request->susp_pack;
        $constants->save();
        //GetMessageAndRedirect
        Session::flash('success', 'Data was Updated');
        return back();
    }
}
