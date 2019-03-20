<?php

namespace App\Http\Controllers\Shop;

use App\CalcHistory;
use App\Http\Cart;
use Session;
use Auth;
use App\Product;
use App\ProfileGrilyato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * ShopController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ok()
    {
        return view('shop.ok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        foreach (Session::get('cart')->items as $item){
            $calcHis = new CalcHistory();
            $calcHis->stock = true;
            $calcHis->production = false;
            $calcHis->user_id = Auth::user()->id;
            $calcHis->order_id = $request->orderId;
            $calcHis->vendor_code = $item['item']->vendor_code;
            $calcHis->description = $item['item']->description;
            $calcHis->count = $item['qty'];
            $calcHis->price = $item['item']->price;
            $calcHis->save();
        }

        Session::forget('cart');

        return redirect(url('/shop/ok'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $sort = $request->sort;
        if($sort == 'grilyato')
            $products = ProfileGrilyato::all()->where('type_product', '=', 'Gryljato');
        else if($sort == 'tprofile'){
            $products = ProfileGrilyato::where('vendor_code', '1339005')
                ->orWhere('vendor_code', '1319003')
                ->orWhere('vendor_code', '1329003')
                ->orWhere('vendor_code', '1339003')
                ->orWhere('vendor_code', '1317024')
                ->orWhere('vendor_code', '1318017')
                ->orWhere('vendor_code', '1319005')
                ->orWhere('vendor_code', '1319006')
                ->orWhere('vendor_code', '1319007')
                ->orWhere('vendor_code', '1310001')
                ->orWhere('vendor_code', '1310002')
                ->orWhere('vendor_code', '1310003')
                ->orWhere('vendor_code', '1339006')
                ->orWhere('vendor_code', '1338017')
                ->orWhere('vendor_code', '1337024')
                ->orWhere('vendor_code', '1330000')
                ->orWhere('vendor_code', '1310000')
                ->orWhere('vendor_code', '11124900306')
                ->orWhere('vendor_code', '11124900312')
                ->orWhere('vendor_code', '11124900336')
                ->orWhere('vendor_code', '11124900512')
                ->orWhere('vendor_code', '11124900506')
                ->orWhere('vendor_code', '11124900536')
                ->orWhere('vendor_code', '11124900612')
                ->orWhere('vendor_code', '11124900636')
                ->orWhere('vendor_code', '11124900606')
                ->orWhere('vendor_code', '11124900706')
                ->orWhere('vendor_code', '11124900736')
                ->orWhere('vendor_code', '11124900712')
                ->orWhere('vendor_code', '11124702412')
                ->orWhere('vendor_code', '11124702436')
                ->orWhere('vendor_code', '11124702406')
                ->orWhere('vendor_code', '11124801712')
                ->orWhere('vendor_code', '11124801736')
                ->orWhere('vendor_code', '11124801706')
                ->orWhere('vendor_code', '11115702412')
                ->orWhere('vendor_code', '11115702406')
                ->orWhere('vendor_code', '11115702436')
                ->orWhere('vendor_code', '11115801736')
                ->orWhere('vendor_code', '11115801706')
                ->orWhere('vendor_code', '11115801712')
                ->orWhere('vendor_code', '11115900312')
                ->orWhere('vendor_code', '11115900306')
                ->orWhere('vendor_code', '11115900336')
                ->orWhere('vendor_code', '11115900512')
                ->orWhere('vendor_code', '11115900506')
                ->orWhere('vendor_code', '11115900536')
                ->orWhere('vendor_code', '11115900612')
                ->orWhere('vendor_code', '11115900606')
                ->orWhere('vendor_code', '11115900636')
                ->orWhere('vendor_code', '11115900712')
                ->orWhere('vendor_code', '11115900706')
                ->orWhere('vendor_code', '11115900736')
                ->orWhere('vendor_code', '11115000012')
                ->orWhere('vendor_code', '11115000036')
                ->orWhere('vendor_code', '11115000006')
                ->orWhere('vendor_code', '11224702412')
                ->orWhere('vendor_code', '11224702436')
                ->orWhere('vendor_code', '11224702406')
                ->orWhere('vendor_code', '11224900312')
                ->orWhere('vendor_code', '11224900306')
                ->orWhere('vendor_code', '11224900336')
                ->orWhere('vendor_code', '2223')
                ->orWhere('vendor_code', '22111500')
                ->orWhere('vendor_code', '221113000')
                ->orWhere('vendor_code', '22111250')
                ->orWhere('vendor_code', '221112000')
                ->orWhere('vendor_code', '221111500')
                ->orWhere('vendor_code', '22111125')
                ->orWhere('vendor_code', '221111000')
                ->orWhere('vendor_code', '22101750')
                ->orWhere('vendor_code', '22101500')
                ->orWhere('vendor_code', '221013000')
                ->orWhere('vendor_code', '22101250')
                ->orWhere('vendor_code', '221012000')
                ->orWhere('vendor_code', '221011500')
                ->orWhere('vendor_code', '221011000')
                ->orWhere('vendor_code', '11124000006')
                ->orWhere('vendor_code', '11124000036')
                ->orWhere('vendor_code', '11124000012')
                ->orWhere('vendor_code', '11115000112')
                ->orWhere('vendor_code', '11115000136')
                ->orWhere('vendor_code', '11115000106')
                ->orWhere('vendor_code', '11124000136')
                ->orWhere('vendor_code', '11124000112')
                ->orWhere('vendor_code', '11124000106')
                ->get();
        }
        else if($sort == 'reyka')
            $products = ProfileGrilyato::all()->where('type_product', '=', 'Reyka');
        else if($sort == 'accessories')
            $products = ProfileGrilyato::all()->where('type_product', '=', 'Accessories');
        else if($sort == 'svet')
            $products = ProfileGrilyato::all()->where('type_product', '=', 'Svet');
        else
            $products = ProfileGrilyato::all();

        return view('shop.show')->withProducts($products);
    }

    public function clear(){
        Session::forget('cart');
        return back();
    }

    public function cart(){
        if(!Session::has('cart'))
            return view('shop.cart');

        $cart = Session::get('cart');
        return view('shop.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'objectId' => rand(0, 999)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function add(Request $request, $id){
        $product = ProfileGrilyato::where('vendor_code', '=', $id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->vendor_code, $request->count);

        Session::put('cart', $cart);
        Session::flash('success', trans('app.Item was added'));
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0)
            Session::put('cart', $cart);
        else
            Session::forget('cart');

        Session::flash('success', 'Item was deleted');
        return back();
    }
}
