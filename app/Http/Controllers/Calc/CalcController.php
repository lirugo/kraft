<?php

namespace App\Http\Controllers\Calc;

use App\CalcHistory;
use App\Constants;
use App\Object;
use App\VendorCodeTProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
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

    public function tprofilevendor(Request $request){
        $vendor = DB::table('vendor_code_t_profiles')->where([
            ['model', $request->model],
            ['profile_thickness', $request->profile_thickness],
            ['color', $request->color]
        ])->get();
        if($vendor->count() === 3)
            return $vendor;
    }

    public function tprofilehistory(Request $request){
        $calcHistory = new CalcHistory();
            $calcHistory->object_id = $request->id;
            $calcHistory->type = $request->type;
            $calcHistory->difficult = $request->difficult;

            $calcHistory->tprofile_3600_vendor = $request->s3600_vendor;
            $calcHistory->tprofile_3600_model = $request->s3600_model;
            $calcHistory->tprofile_3600_name = $request->s3600_name;
            $calcHistory->tprofile_3600_width = $request->s3600_width;
            $calcHistory->tprofile_3600_lenght = $request->s3600_lenght;
            $calcHistory->tprofile_3600_color = $request->s3600_color;
            $calcHistory->tprofile_3600_count = $request->s3600_count;
            $calcHistory->tprofile_3600_price = $request->s3600_price;
            $calcHistory->tprofile_3600_pack = $request->s3600_pack;
            $calcHistory->tprofile_3600_price_all = $request->s3600_price_all;

            $calcHistory->tprofile_1200_vendor = $request->s1200_vendor;
            $calcHistory->tprofile_1200_model = $request->s1200_model;
            $calcHistory->tprofile_1200_name = $request->s1200_name;
            $calcHistory->tprofile_1200_width = $request->s1200_width;
            $calcHistory->tprofile_1200_lenght = $request->s1200_lenght;
            $calcHistory->tprofile_1200_color = $request->s1200_color;
            $calcHistory->tprofile_1200_count = $request->s1200_count;
            $calcHistory->tprofile_1200_price = $request->s1200_price;
            $calcHistory->tprofile_1200_pack = $request->s1200_pack;
            $calcHistory->tprofile_1200_price_all = $request->s1200_price_all;

            $calcHistory->tprofile_600_vendor = $request->s600_vendor;
            $calcHistory->tprofile_600_model = $request->s600_model;
            $calcHistory->tprofile_600_name = $request->s600_name;
            $calcHistory->tprofile_600_width = $request->s600_width;
            $calcHistory->tprofile_600_lenght = $request->s600_lenght;
            $calcHistory->tprofile_600_color = $request->s600_color;
            $calcHistory->tprofile_600_count = $request->s600_count;
            $calcHistory->tprofile_600_price = $request->s600_price;
            $calcHistory->tprofile_600_pack = $request->s600_pack;
            $calcHistory->tprofile_600_price_all = $request->s600_price_all;

            $calcHistory->tprofile_susp_vendor = $request->sSusp_vendor;
            $calcHistory->tprofile_susp_model = $request->sSusp_model;
            $calcHistory->tprofile_susp_name = $request->sSusp_name;
            $calcHistory->tprofile_susp_width = $request->sSusp_width;
            $calcHistory->tprofile_susp_lenght = $request->sSusp_lenght;
            $calcHistory->tprofile_susp_color = $request->sSusp_color;
            $calcHistory->tprofile_susp_count = $request->sSusp_count;
            $calcHistory->tprofile_susp_price = $request->sSusp_price;
            $calcHistory->tprofile_susp_pack = $request->sSusp_pack;
            $calcHistory->tprofile_susp_price_all = $request->sSusp_price_all;

            $calcHistory->tprofile_sum_total = $request->sSumTotal;
        $calcHistory->save();
    }

    public function grilyatohistory(Request $request){
        $calcHistory = new CalcHistory();
        $calcHistory->object_id = $request->id;
        $calcHistory->type = $request->type;
        $calcHistory->difficult = $request->difficult;

        $calcHistory->tp2400_grilyato = $request->tp2400_grilyato;
        $calcHistory->tp1200_grilyato = $request->tp1200_grilyato;
        $calcHistory->tp600_grilyato = $request->tp600_grilyato;
        $calcHistory->tp600f_grilyato = $request->tp600f_grilyato;
        $calcHistory->tp600tc_grilyato = $request->tp600tc_grilyato;
        $calcHistory->susp_grilyato = $request->susp_grilyato;
        $calcHistory->angles_grilyato = $request->angles_grilyato;
        $calcHistory->suspass_grilyato = $request->suspass_grilyato;
        $calcHistory->dowel1_grilyato = $request->dowel1_grilyato;
        $calcHistory->dowel2_grilyato = $request->dowel2_grilyato;

        $calcHistory->tp2400_priceByOne_grilyato = $request->tp2400_priceByOne_grilyato;
        $calcHistory->tp1200_priceByOne_grilyato = $request->tp1200_priceByOne_grilyato;
        $calcHistory->tp600_priceByOne_grilyato = $request->tp600_priceByOne_grilyato;
        $calcHistory->tp600f_priceByOne_grilyato = $request->tp600f_priceByOne_grilyato;
        $calcHistory->tp600tc_priceByOne_grilyato = $request->tp600tc_priceByOne_grilyato;
        $calcHistory->susp_price_priceByOne_grilyato = $request->susp_price_priceByOne_grilyato;
        $calcHistory->angles_price_priceByOne_grilyato = $request->angles_price_priceByOne_grilyato;
        $calcHistory->gsuspass_price_priceByOne_grilyato = $request->gsuspass_price_priceByOne_grilyato;
        $calcHistory->dowel1c_price_priceByOne_grilyato = $request->dowel1c_price_priceByOne_grilyato;
        $calcHistory->dowel2c_price_priceByOne_grilyato = $request->dowel2c_price_priceByOne_grilyato;

        $calcHistory->tp2400_package_grilyato = $request->tp2400_package_grilyato;
        $calcHistory->tp1200_package_grilyato = $request->tp1200_package_grilyato;
        $calcHistory->tp600_package_grilyato = $request->tp600_package_grilyato;
        $calcHistory->tp600f_package_grilyato = $request->tp600f_package_grilyato;
        $calcHistory->tp600tc_package_grilyato = $request->tp600tc_package_grilyato;
        $calcHistory->susp_package_grilyato = $request->susp_package_grilyato;
        $calcHistory->angles_package_grilyato = $request->angles_package_grilyato;
        $calcHistory->suspass_package_grilyato = $request->suspass_package_grilyato;
        $calcHistory->dowel1_package_grilyato = $request->dowel1_package_grilyato;
        $calcHistory->dowel2_package_grilyato = $request->dowel2_package_grilyato;

        $calcHistory->tp2400_price_grilyato = $request->tp2400_price_grilyato;
        $calcHistory->tp1200_price_grilyato = $request->tp1200_price_grilyato;
        $calcHistory->tp600_price_grilyato = $request->tp600_price_grilyato;
        $calcHistory->tp600f_price_grilyato = $request->tp600f_price_grilyato;
        $calcHistory->tp600tc_price_grilyato = $request->tp600tc_price_grilyato;
        $calcHistory->susp_price_grilyato = $request->susp_price_grilyato;
        $calcHistory->angles_price_grilyato = $request->angles_price_grilyato;
        $calcHistory->suspass_price_grilyato = $request->suspass_price_grilyato;
        $calcHistory->dowel1_price_grilyato = $request->dowel1_price_grilyato;
        $calcHistory->dowel2_price_grilyato = $request->dowel2_price_grilyato;
        $calcHistory->sum_grilyato = $request->sum_grilyato;

        $calcHistory->save();
    }

    public function cubehistory(Request $request){
        $calcHistory = new CalcHistory();
        $calcHistory->object_id = $request->id;
        $calcHistory->type = $request->type;
        $calcHistory->difficult = $request->difficult;
        $calcHistory->count_cube = $request->count;
        $calcHistory->stringer_cube = $request->stringer;
        $calcHistory->podves_cube = $request->podves;

        $calcHistory->count_price_cube = $request->count_price;
        $calcHistory->stringer_price_cube = $request->stringer_price;
        $calcHistory->susp_price_cube = $request->susp_price;

        $calcHistory->countc_pack_cube = $request->countc_pack;
        $calcHistory->stringerc_pack_cube = $request->stringerc_pack;
        $calcHistory->csuspc_pack_cube = $request->csuspc_pack;

        $calcHistory->countc_price_cube = $request->countc_price;
        $calcHistory->stringerc_price_cube = $request->stringerc_price;
        $calcHistory->suspc_price_cube = $request->suspc_price;
        $calcHistory->sum_cube = $request->sum;

        $calcHistory->save();
    }

    public function ledhistory(Request $request){
        $calcHistory = new CalcHistory();
            $calcHistory->object_id = $request->id;
            $calcHistory->type = $request->type;
            $calcHistory->count_led = $request->count_led;
            $calcHistory->sum_led = $request->sum_led;
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
            //GLK
            'tp3600c' => $constants->tp3600,
            'tp1200c' => $constants->tp1200,
            'tp600c' => $constants->tp600,
            'L3000c' => $constants->L3000,
            'suspc' => $constants->susp,
            'g600tc' => $constants->g600tc,
            //ENDGLK
            'g2400c_a' => $constants->g2400_a,
            'g2400c_b' => $constants->g2400_b,
            'g1200c_a' => $constants->g1200_a,
            'g600c_a' => $constants->g600_a,
            'g600fc_a' => $constants->g600f_a,
            'g600mc_a' => $constants->g600m_a,
            'suspc_a' => $constants->susp_a,
            'L3000c_a' => $constants->L3000_a,
            'suspass_a' => $constants->suspass_a,
            //Price
            'g2400c_price' => $constants->g2400_price,
            'g1200c_price' => $constants->g1200_price,
            'g600c_price' => $constants->g600_price,
            'g600fc_price' => $constants->g600f_price,
            'L3000c_price' => $constants->gL3000_price,
            'gsusp_price' => $constants->gsusp_price,
            'gsuspass_price' => $constants->gsuspass_price,
            'dowel1_price' => $constants->dowel1_price,
            'dowel2_price' => $constants->dowel2_price,
            'g600tc_price' => $constants->g600tc_price,
            //Pack
            'g2400_pack' => $constants->g2400_pack,
            'g1200_pack' => $constants->g1200_pack,
            'g600_pack' => $constants->g600_pack,
            'g600f_pack' => $constants->g600f_pack,
            'g600m_pack' => $constants->g600m_pack,
            'g600tc_pack' => $constants->g600tc_pack,
            'gsusp_pack' => $constants->gsusp_pack,
            'gL3000_pack' => $constants->gL3000_pack,
            'gsuspass_pack' => $constants->gsuspass_pack,
            'dowel1_pack' => $constants->dowel1_pack,
            'dowel2_pack' => $constants->dowel2_pack
        ]);
        return view('calc.grilyato')->with('data', $data);
    }

    public function cube($id){
        $object = Object::find($id);
        $constants = Constants::get()->last();
        $data = new Collection;
        $data->put('object' , $object);
        $data->put('constants' , $constants);
        Javascript::put([
            'id' => $id,
            'easy' => $constants->easy,
            'hard' => $constants->hard,
            'countc' => $constants->count,
            'stringerc' => $constants->stringer,
            //Price
            'countc_price' => $constants->count_price,
            'stringerc_price' => $constants->stringer_price,
            'suspc_price' => $constants->csusp_price,
            //pack
            'countc_pack' => $constants->count_pack,
            'stringerc_pack' => $constants->stringer_pack,
            'csuspc_pack' => $constants->csusp_pack
        ]);
        return view('calc.cube')->with('data', $data);
    }

    public function history($id){
        $calcs = CalcHistory::where('object_id', $id)->orderBy('id', 'DESC')->paginate(5);
        if($calcs->count() == 0){
            Session::flash('warning', 'Для начала сделайте свой первый расчет');
            return back();
        }
        return view('calc.history')->with('calcs', $calcs);
    }

    public function led($id){
        $object = Object::find($id);
        $constants = Constants::get()->last();
        $data = new Collection;
        $data->put('object' , $object);
        $data->put('constants' , $constants);
        Javascript::put([
            'id' => $id,
            'easy' => $constants->easy,
            'hard' => $constants->hard,
            'coefficient_led' => $constants->coefficient_led,
            //Price
            'price_led' => $constants->price_led,
        ]);
        return view('calc.led')->with('data', $data);
    }

}
