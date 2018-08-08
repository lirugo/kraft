<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class DistributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $distributors = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Distributor');
        }
        )->get();

        return view('admin.distributor.index')->withDistributors($distributors);
    }

    public function update(Request $request, $id){
        $distr = User::find($id);
        $distr->vendor_code_1c = $request->vendor_code_1c;
        $distr->save();

        Session::flash('success', 'Data was updated.');
        return back();
    }
}
