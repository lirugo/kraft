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

    public function grilyato(){
        $constants = Constants::get()->last();
        return view('admin.calc.grilyato')->with('constants', $constants);
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

    public function grilyatoupdate(Request $request){
        //Validate
        $this->validate($request,[
            //Validate company profile
            'g2400_a' => 'required',
            'g2400_b' => 'required',
            'g1200_b' => 'required',
            'g600_a' => 'required',
            'g600f_a' => 'required',
            'susp_a' => 'required',
            'L3000_a' => 'required',
            'suspass_a' => 'required',
            'g600tc' => 'required',
            //price
            'g2400_price' => 'required',
            'g1200_price' => 'required',
            'g600_price' => 'required',
            'g600f_price' => 'required',
            'gL3000_price' => 'required',
            'gsusp_price' => 'required',
            'gsuspass_price' => 'required',
            'dowel1_price' => 'required',
            'dowel2_price' => 'required',
            'g600tc_price' => 'required',
            //price
            'g2400_pack' => 'required',
            'g1200_pack' => 'required',
            'g600_pack' => 'required',
            'g600f_pack' => 'required',
            'g600tc_pack' => 'required',
            'gL3000_pack' => 'required',
            'gsusp_pack' => 'required',
            'gsuspass_pack' => 'required',
            'dowel1_pack' => 'required',
            'dowel2_pack' => 'required',
        ]);
        //SetData
        $constants = Constants::get()->last();
        $constants->g2400_a = $request->g2400_a;
        $constants->g2400_b = $request->g2400_b;
        $constants->g1200_b = $request->g1200_b;
        $constants->g600_a = $request->g600_a;
        $constants->g600f_a = $request->g600f_a;
        $constants->L3000_a = $request->L3000_a;
        $constants->susp_a = $request->susp_a;
        $constants->suspass_a = $request->suspass_a;
        $constants->g600tc = $request->g600tc;
        //Price
        $constants->g2400_price = $request->g2400_price;
        $constants->g1200_price = $request->g1200_price;
        $constants->g600_price = $request->g600_price;
        $constants->g600f_price = $request->g600f_price;
        $constants->gL3000_price = $request->gL3000_price;
        $constants->gsusp_price = $request->gsusp_price;
        $constants->gsuspass_price = $request->gsuspass_price;
        $constants->dowel1_price = $request->dowel1_price;
        $constants->dowel2_price = $request->dowel2_price;
        $constants->g600tc_price = $request->g600tc_price;
        //Pack
        $constants->g2400_pack = $request->g2400_pack;
        $constants->g1200_pack = $request->g1200_pack;
        $constants->g600_pack = $request->g600_pack;
        $constants->g600f_pack = $request->g600f_pack;
        $constants->g600tc_pack = $request->g600tc_pack;
        $constants->gL3000_pack = $request->gL3000_pack;
        $constants->gsusp_pack = $request->gsusp_pack;
        $constants->gsuspass_pack = $request->gsuspass_pack;
        $constants->dowel1_pack = $request->dowel1_pack;
        $constants->save();
        //GetMessageAndRedirect
        Session::flash('success', 'Data was Updated');
        return back();
    }
}
