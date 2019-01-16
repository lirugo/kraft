<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProfileGrilyato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Response;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProfileGrilyato::paginate(50);
        return view('admin.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProfileGrilyato::find($id);
        $product->price = $request->price;
        $product->save();

        Session::flash('success', 'Successfully updated');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateCSV(Request $request){
        $file = $request->file('file');

        $row = 1;
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $num = count($data);
                $row++;
                for ($c=0; $c < $num - 1; $c++) {
                    //UPDATING PRODUCT
                    $product = ProfileGrilyato::where('vendor_code', $data[$c])->first();
                    if(is_null($product))
                        continue;

                    $product->price = $data[$c+1];
                    $product->save();
                    $c++;
                }
            }
        }

        Session::flash('success', 'UPDATED FROM CSV!');
        return back();
    }

    public function getProductsCSV(){
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
            ,   'Content-type'        => 'text/csv'
            ,   'Content-Disposition' => 'attachment; filename=products.csv'
            ,   'Expires'             => '0'
            ,   'Pragma'              => 'public'
        ];

        $callback = function()
            {
                $FH = fopen('php://output', 'w');

                //WRITE TO FILE
                foreach (ProfileGrilyato::all() as $product)
                    fputcsv($FH, [$product->vendor_code, $product->price], ';');

                fclose($FH);
            };

    return response()->stream($callback, 200, $headers);
    }
}
