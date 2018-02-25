<?php

namespace App\Http\Controllers\Product;

use App\Product;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function upload(){
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.upload')->with('products', $products);
    }

    public function uploadpost(Request $request){
        $file = $request->file('mock_data');
        $extension = $file->getClientOriginalExtension();
        if($extension != "csv")
        {
            Session::flash('warning', 'File extension only .csv');
            return back();
        }
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move('uploads/products/upload/',$filename);

        if (($handle = fopen ( public_path () . '/uploads/products/upload/'.$filename, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $product = new Product();
                $product->firstname = $data [1];
                $product->lastname = $data [2];
                $product->email = $data [3];
                $product->gender = $data [4];
                $product->save ();
            }
            fclose ( $handle );
        }
        Session::flash('success', 'Data was be uploaded.');
        return back();
    }
}
