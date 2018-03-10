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
            'susp' => 'required'
        ]);
        //SetData
        $constants = Constants::get()->last();
        $constants->tp3600 = $request->tp3600;
        $constants->tp1200 = $request->tp1200;
        $constants->tp600 = $request->tp600;
        $constants->L3000 = $request->L3000;
        $constants->susp = $request->susp;
        $constants->save();
        //GetMessageAndRedirect
        Session::flash('success', 'Date was Updated');
        return back();
    }
}
