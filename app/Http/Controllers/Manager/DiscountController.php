<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function index($id){
        //Get all data about company
       $company = Company::where('user_id', $id)->first();
        //Return view
        return view('manager.distributor.discount.index')->with('company',$company);
    }

    public function update(Request $request, $id){
        //Persist data to db
        $company = Company::where('user_id', $id)->first();
        $company->discount_tprofile = $request->tprofile;
        $company->discount_grilyato = $request->grilyato;
        $company->discount_cube = $request->cube;
        $company->discount_led = $request->led;
        $company->save();
        //Show flash message
        Session::flash('success', 'Data was update');
        //Redirect back
        return back();
    }
}
