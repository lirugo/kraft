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
        else if($sort == 'tprofile')
            $products = ProfileGrilyato::all()->where('type_product', '=', 'T-Profile');
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
        Session::flash('success', 'Item was added');
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
