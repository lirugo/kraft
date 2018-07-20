<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Constants;
use App\Object;
use App\OrdersKraft;
use App\ProductKraft;
use App\ProfileGrilyato;
use App\VendorCodeTProfile;
use App\VendorCodeTProfileAngle;
use App\VendorCodeTProfileSusp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use JavaScript;
use Session;

class OrderController extends Controller
{
    public function index($id){
        $object = Object::find($id);
        $constants = Constants::get()->last();
        $data = new Collection;
        $data->put('objectId' , $object->id);
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
            'suspc_pack' => $constants->susp_pack,
            //Grilyato
            //GLK
            'grilyato_tp3600c' => $constants->tp3600,
            'grilyato_tp1200c' => $constants->tp1200,
            'grilyato_tp600c' => $constants->tp600,
            'grilyato_L3000c' => $constants->L3000,
            'grilyato_suspc' => $constants->susp,
            'grilyato_g600tc' => $constants->g600tc,
            //ENDGLK
            'grilyato_g2400c_a' => $constants->g2400_a,
            'grilyato_g2400c_b' => $constants->g2400_b,
            'grilyato_g1200c_a' => $constants->g1200_a,
            'grilyato_g1200c_b' => $constants->g1200_b,
            'grilyato_g600c_a' => $constants->g600_a,
            'grilyato_g600fc_a' => $constants->g600f_a,
            'grilyato_g600mc_a' => $constants->g600m_a,
            'grilyato_suspc_a' => $constants->susp_a,
            'grilyato_L3000c_a' => $constants->L3000_a,
            'grilyato_suspass_a' => $constants->suspass_a,
            //Price
            'grilyato_g2400c_price' => $constants->g2400_price,
            'grilyato_g1200c_price' => $constants->g1200_price,
            'grilyato_g600c_price' => $constants->g600_price,
            'grilyato_g600fc_price' => $constants->g600f_price,
            'grilyato_L3000c_price' => $constants->gL3000_price,
            'grilyato_gsusp_price' => $constants->gsusp_price,
            'grilyato_gsuspass_price' => $constants->gsuspass_price,
            'grilyato_dowel1_price' => $constants->dowel1_price,
            'grilyato_dowel2_price' => $constants->dowel2_price,
            'grilyato_g600tc_price' => $constants->g600tc_price,
            //Pack
            'grilyato_g3600_pack' => $constants->g3600_pack,
            'grilyato_g2400_pack' => $constants->g2400_pack,
            'grilyato_g1200_pack' => $constants->g1200_pack,
            'grilyato_g600_pack' => $constants->g600_pack,
            'grilyato_g600f_pack' => $constants->g600f_pack,
            'grilyato_g600m_pack' => $constants->g600m_pack,
            'grilyato_g600tc_pack' => $constants->g600tc_pack,
            'grilyato_gsusp_pack' => $constants->gsusp_pack,
            'grilyato_gL3000_pack' => $constants->gL3000_pack,
            'grilyato_gsuspass_pack' => $constants->gsuspass_pack,
            'grilyato_dowel1_pack' => $constants->dowel1_pack,
            'grilyato_dowel2_pack' => $constants->dowel2_pack
        ]);
        return view('order.index')->with('data', $data);
    }

    public function update(){
        $id = $_POST['id'];
        $pack = $_POST['quantity'];
        $order = CalcHistory::find($id);
        $order->count = $pack;
        $order->save();
    }

    public function create(){
        $id=0;
        $object = Object::find($id);
        $constants = Constants::get()->last();
        $data = new Collection;
        $data->put('objectId' , $id);
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
            'suspc_pack' => $constants->susp_pack,
            //Grilyato
            //GLK
            'grilyato_tp3600c' => $constants->tp3600,
            'grilyato_tp1200c' => $constants->tp1200,
            'grilyato_tp600c' => $constants->tp600,
            'grilyato_L3000c' => $constants->L3000,
            'grilyato_suspc' => $constants->susp,
            'grilyato_g600tc' => $constants->g600tc,
            //ENDGLK
            'grilyato_g2400c_a' => $constants->g2400_a,
            'grilyato_g2400c_b' => $constants->g2400_b,
            'grilyato_g1200c_a' => $constants->g1200_a,
            'grilyato_g1200c_b' => $constants->g1200_b,
            'grilyato_g600c_a' => $constants->g600_a,
            'grilyato_g600fc_a' => $constants->g600f_a,
            'grilyato_g600mc_a' => $constants->g600m_a,
            'grilyato_suspc_a' => $constants->susp_a,
            'grilyato_L3000c_a' => $constants->L3000_a,
            'grilyato_suspass_a' => $constants->suspass_a,
            //Price
            'grilyato_g2400c_price' => $constants->g2400_price,
            'grilyato_g1200c_price' => $constants->g1200_price,
            'grilyato_g600c_price' => $constants->g600_price,
            'grilyato_g600fc_price' => $constants->g600f_price,
            'grilyato_L3000c_price' => $constants->gL3000_price,
            'grilyato_gsusp_price' => $constants->gsusp_price,
            'grilyato_gsuspass_price' => $constants->gsuspass_price,
            'grilyato_dowel1_price' => $constants->dowel1_price,
            'grilyato_dowel2_price' => $constants->dowel2_price,
            'grilyato_g600tc_price' => $constants->g600tc_price,
            //Pack
            'grilyato_g3600_pack' => $constants->g3600_pack,
            'grilyato_g2400_pack' => $constants->g2400_pack,
            'grilyato_g1200_pack' => $constants->g1200_pack,
            'grilyato_g600_pack' => $constants->g600_pack,
            'grilyato_g600f_pack' => $constants->g600f_pack,
            'grilyato_g600m_pack' => $constants->g600m_pack,
            'grilyato_g600tc_pack' => $constants->g600tc_pack,
            'grilyato_gsusp_pack' => $constants->gsusp_pack,
            'grilyato_gL3000_pack' => $constants->gL3000_pack,
            'grilyato_gsuspass_pack' => $constants->gsuspass_pack,
            'grilyato_dowel1_pack' => $constants->dowel1_pack,
            'grilyato_dowel2_pack' => $constants->dowel2_pack
        ]);
        return view('order.index')->with('data', $data);
    }

    public function select($id){
        $orders = CalcHistory::all()->where('object_id', $id);
        $orders = $orders->unique('order_id');
        $data = new Collection();
        $data->put('orders', $orders);
        $data->put('id', $id);
        //BAck if empty
        if(count($orders) === 0 )
        {
            Session::flash('warning', 'Заказов нет. Сделайте свой первый заказ.');
            return back();
        }
        return view('order.calc.select')->with('data', $data);
    }

    public function showStock($orderId){
        $orders = CalcHistory::get()->where('order_id', '=', $orderId);
        $total = 0;
        $i = 1;
        foreach ($orders as $order)
        {
            if(!empty($buff = VendorCodeTProfile::where('vendor_code','=', $order->vendor_code)->first()))
                $sum_by_one = $buff->price;
            else  if(!empty($buff = VendorCodeTProfileAngle::where('vendor_code','=', $order->vendor_code)->first()))
                $sum_by_one = $buff->price;
            else  if(!empty($buff = VendorCodeTProfileSusp::where('vendor_code','=', $order->vendor_code)->first()))
                $sum_by_one = $buff->price;
            else $sum_by_one = 0;

            $order->sum = $sum_by_one*$order->pack*$order->count_pack;
            $total += $order->sum;
            $order->save();
            $order->id_row = $i;
            $order->sum_by_one = $sum_by_one;
            $i+=1;
            $orders->order_id = $order->order_id;
            $orders->object_id = $order->object_id;
            $orders->status = $order->status;
        }
        $orders->total = $total;

        return view('order.show')->with('orders',$orders);
    }

    public function historyStock(){
        $orders = CalcHistory::all()->where('user_id', Auth::user()->id);
        $orders = $orders->unique('user_id');
        $data = new Collection();
        $data->put('orders', $orders);
        $data->put('user_id', Auth::user()->id);
        //BAck if empty
        if(count($orders) === 0 )
        {
            Session::flash('warning', 'Заказов нет. Сделайте свой первый заказ.');
            return back();
        }
        return view('order.stock.history')->with('data', $data);
    }

    public function selectorder($id, $orderId){
        $orders = CalcHistory::get()->where('order_id', '=', $orderId);
        $total = 0;
        $i = 1;
        foreach ($orders as $order)
        {
            $sum_by_one = $order->sum;
            $order->sum = $sum_by_one*$order->pack*$order->count_pack;
            $total += $order->count*$order->price;
//            $order->save();
            $order->id_row = $i;
            $order->sum_by_one = $sum_by_one;
            $i+=1;
            $orders->order_id = $order->order_id;
            $orders->object_id = $order->object_id;
            $orders->status = $order->status;
        }
        $orders->total = $total;
        return view('order.show')->with('orders',$orders);
    }

    public function deletePartOrder($id){
        $cH = CalcHistory::find($id);
        $orders = CalcHistory::where('order_id', '=', $cH->order_id)->get();
        if(count($orders) == 1)
        {
            Session::flash('warning', 'Вы не можете удалить последнюю позицию в заказе');
            return back();
        }

        $cH->delete();
        return back();
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
            $light = ProfileGrilyato::where([
                ['speciality', '=', 'T'],
                ['type', '=', 'KRAFT LED'],
                ['weight', '=', $request->profile_thickness],
                ['length', '=', 600],
            ])->first();
        $collection = new Collection();
        foreach ($profiles as $profile)
        {
            $collection->put($profile->profile, $profile);
        }
        foreach ($angles as $angle) {
            $collection->put('angle', $angle);
        }
        foreach ($wireWithEars as $wireWithEar) {
            $collection->put('wire_with_ear', $wireWithEar);
        }
        foreach ($wireWithHooks as $wireWithHook) {
            $collection->put('wire_with_hook', $wireWithHook);
        }
        foreach ($springSusps as $springSusp) {
            $collection->put('spring_susp', $springSusp);
        }
        $collection->put('light',$light);
        return $collection;
    }

    public function grilyatovendor(Request $request){
        $sizecells = $request->sizecells;
        if($request->color == 'other')
            $color = 'ANY RAL';
        else
            $color = $request->color;

        $collection = new Collection();
        if($request->grilyato_model == 'classical'){
            $grilyato_2400 = ProfileGrilyato::where([
                 ['length', '=', 2400],
                 ['cells', '=', $sizecells],
                 ['type', '=', 'Грильято'],
                 ['color', '=', $color],
             ])->first();
            $grilyato_1200 = NULL;
            $grilyato_600 = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято'],
                ['speciality', '=', 'повздовжний'],
                ['color', '=', $color],
            ])->first();
            $grilyato_600m = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято'],
                ['color', '=', $color],
                ['speciality', '=', 'М'],
            ])->first();
            $grilyato_600f = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято'],
                ['color', '=', $color],
                ['speciality', '=', 'П'],
            ])->first();
            $WireWithHook = ProfileGrilyato::where([
                ['vendor_code', '=', 2222],
            ])->first();
            $WireWithEar = ProfileGrilyato::where([
                ['speciality', '=', 'вушко'],
                ['length', '=', $request->grilyato_wire_with_ear],
            ])->first();
            $susp = ProfileGrilyato::where([
                ['vendor_code', '=', 1111],
            ])->first();
            $angle = ProfileGrilyato::where([
                ['vendor_code', '=', 1329003],
            ])->first();
            $dowel1 = ProfileGrilyato::where([
                ['vendor_code', '=', 2231100406],
            ])->first();
            $dowel2 = ProfileGrilyato::where([
                ['vendor_code', '=', 2232100406],
            ])->first();
            $light = ProfileGrilyato::where([
                ['speciality', '=', 'T'],
                ['type', '=', 'KRAFT LED'],
                ['weight', '=', 15],
                ['length', '=', 600],
            ])->first();

            $collection->put('3600',NULL);
            $collection->put('2400',$grilyato_2400);
            $collection->put('1200',$grilyato_1200);
            $collection->put('600',$grilyato_600);
            $collection->put('600m',$grilyato_600m);
            $collection->put('600f',$grilyato_600f);
            $collection->put('susp',$susp);
            $collection->put('wireWithHook',$WireWithHook);
            $collection->put('wireWithEar',$WireWithEar);
            $collection->put('angle',$angle);
            $collection->put('dowel1',$dowel1);
            $collection->put('dowel2',$dowel2);
            $collection->put('light',$light);

        return $collection;
        }
        else if($request->grilyato_model == 'pyramidal'){
            $grilyato_2400 = ProfileGrilyato::where([
                ['length', '=', 2400],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
            ])->first();
            $grilyato_1200 = ProfileGrilyato::where([
                ['length', '=', 1200],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
            ])->first();
            $grilyato_600 = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['speciality', '=', 'повздовжний'],
                ['color', '=', $color],
            ])->first();
            $grilyato_600m = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
                ['speciality', '=', 'М'],
            ])->first();
            $grilyato_600f = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
                ['speciality', '=', 'П'],
            ])->first();
            $WireWithHook = ProfileGrilyato::where([
                ['vendor_code', '=', '2222'],
            ])->first();
            $WireWithEar = ProfileGrilyato::where([
                ['speciality', '=', 'вушко'],
                ['length', '=', $request->grilyato_wire_with_ear],
            ])->first();
            $susp = ProfileGrilyato::where([
                ['vendor_code', '=', '1111'],
            ])->first();
            $angle = ProfileGrilyato::where([
                ['vendor_code', '=', '1329003'],
            ])->first();
            $dowel1 = ProfileGrilyato::where([
                ['vendor_code', '=', '2231100406'],
            ])->first();
            $dowel2 = ProfileGrilyato::where([
                ['vendor_code', '=', '2232100406'],
            ])->first();
            $light = ProfileGrilyato::where([
                ['speciality', '=', 'Т'],
                ['type', '=', 'KRAFT LED'],
                ['weight', '=', '15'],
            ])->first();

            $collection->put('3600',NULL);
            $collection->put('2400',$grilyato_2400);
            $collection->put('1200',$grilyato_1200);
            $collection->put('600',$grilyato_600);
            $collection->put('600m',$grilyato_600m);
            $collection->put('600f',$grilyato_600f);
            $collection->put('susp',$susp);
            $collection->put('wireWithHook',$WireWithHook);
            $collection->put('wireWithEar',$WireWithEar);
            $collection->put('angle',$angle);
            $collection->put('dowel1',$dowel1);
            $collection->put('dowel2',$dowel2);
            $collection->put('light',$light);


            return $collection;
        }
        else if($request->grilyato_model == 'Glk-15'){
            $grilyato_3600 = DB::table('vendor_code_t_profiles')->where([
                ['profile', '=', 3600],
                ['profile_thickness', '=', 15],
                ['model', '=', 'Fortis'],
                ['color', '=', $color],
            ])->first();
            $grilyato_2400 = NULL;
            $grilyato_1200 = DB::table('vendor_code_t_profiles')->where([
                ['profile', '=', 1200],
                ['profile_thickness', '=', 15],
                ['model', '=', 'Fortis'],
                ['color', '=', $color],
            ])->first();
            $grilyato_600 = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'GLK-15'],
                ['speciality', '=', 'торцевой'],
                ['color', '=', $color],
            ])->first();
            $grilyato_600m = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
                ['speciality', '=', 'М'],
            ])->first();
            $grilyato_600f = ProfileGrilyato::where([
                ['length', '=', 600],
                ['cells', '=', $sizecells],
                ['type', '=', 'Грильято пирамидальная'],
                ['color', '=', $color],
                ['speciality', '=', 'П'],
            ])->first();
            $WireWithHook = DB::table('vendor_code_t_profile_susps')->where([
                ['model', '=', 'Дріт з гаком'],
                ['profile', '=', $request->grilyato_wire_with_hook],
            ])->first();
            $WireWithEar = DB::table('vendor_code_t_profile_susps')->where([
                ['model', '=', 'Дріт з вушком'],
                ['profile', '=', $request->grilyato_wire_with_ear],
            ])->first();
            $susp = DB::table('vendor_code_t_profile_susps')->where([
                ['vendor_code', '=', '00-00000875'],
            ])->first();
            $angle = ProfileGrilyato::where([
                ['vendor_code', '=', 1329003],
            ])->first();
            $dowel1 = ProfileGrilyato::where([
                ['vendor_code', '=', 2231100406],
            ])->first();
            $dowel2 = ProfileGrilyato::where([
                ['vendor_code', '=', 2232100406],
            ])->first();
            $light = ProfileGrilyato::where([
                ['speciality', '=', 'Т'],
                ['type', '=', 'KRAFT LED'],
                ['weight', '=', 15],
            ])->first();

            $collection->put('3600',$grilyato_3600);
            $collection->put('2400',$grilyato_2400);
            $collection->put('1200',$grilyato_1200);
            $collection->put('600',$grilyato_600);
            $collection->put('600m',$grilyato_600m);
            $collection->put('600f',$grilyato_600f);
            $collection->put('susp',$susp);
            $collection->put('wireWithHook',$WireWithHook);
            $collection->put('wireWithEar',$WireWithEar);
            $collection->put('angle',$angle);
            $collection->put('dowel1',$dowel1);
            $collection->put('dowel2',$dowel2);
            $collection->put('light',$light);


            return $collection;
        }
        else
        return $request->grilyato_model;
    }

    public function common_save(Request $request, $id){
        $calcHis = new CalcHistory();
        if($id != 0)
            $calcHis->object_id = $id;
        else
            $calcHis->stock = true;

        $calcHis->user_id = Auth::user()->id;
        $calcHis->order_id = $request->order_id;
        $calcHis->vendor_code = $request->vendor_code;
        $calcHis->model = $request->model;
        $calcHis->description = $request->description;
        $calcHis->width = $request->width;
        $calcHis->length = $request->length;
        $calcHis->color = $request->color;
        $calcHis->count = $request->count;
        $calcHis->price = $request->price;
        $calcHis->save();
        Session::flash('success', 'Ваш заказ сохранен.');
    }

    public function show($id){
        $orders = CalcHistory::all()->where('object_id', $id);
        $data = new Collection();
        $data->put('orders', $orders);
        $data->put('id', $id);

        return view('order.show')->with('data',$data);
    }

    public function deleteorder($id, $order_id){
        DB::table('calc_histories')->where('order_id', $order_id)->delete();
        return back();
    }
}
