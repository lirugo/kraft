<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Constants;
use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use JavaScript;
use Session;

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

    public function selectorder($id){
        $orders = CalcHistory::all()->where('object_id', $id);
        $data = new Collection();
        $data->put('orders', $orders);
        $data->put('order_id', $orders[0]->order_id);
        $total = 0;
        foreach ($orders as $order)
            $total += $order->sum;
        $data->put('id', $id);
        $data->put('total', $total);

        return view('order.show')->with('data',$data);
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

    public function common_save(Request $request, $id){
        $calcHis = new CalcHistory();
            $calcHis->object_id = $id;
            $calcHis->order_id = $request->order_id;
            $calcHis->vendor_code = $request->vendor_code;
            $calcHis->model = $request->model;
            $calcHis->description = $request->description;
            $calcHis->width = $request->width;
            $calcHis->length = $request->length;
            $calcHis->color = $request->color;
            $calcHis->pack = $request->pack;
            $calcHis->sum = $request->sum;
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
