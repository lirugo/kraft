<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\CompanyChange;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ModerationController extends Controller
{
    public function index(){
        $ch = CompanyChange::all()->where('done', '=', false);
        $data = array('company' => count($ch));
        return view('manager/moderation/index')->with('data', $data);
    }

    public function company(){
        $companychanges = CompanyChange::all()->where('done' , '=', 'false');
        foreach($companychanges as $ch)
            $ch->company = Company::find($ch->company_id);
        return view('manager/moderation/company/index')->with('chs', $companychanges);
    }

    public function companypost($id){
        $ch = CompanyChange::find($id);
        $company = Company::find($ch->company_id);

        $company->city = $ch->city;
        $company->street = $ch->street;
        $company->house = $ch->house;
        $company->housing = $ch->housing;
        $company->office = $ch->office;
        $company->smartphone = $ch->smartphone;
        $company->phone = $ch->phone;
        $company->fax = $ch->fax;
        $company->bank = $ch->bank;
        $company->mfo = $ch->mfo;
        $company->settlementaccount = $ch->settlementaccount;
        $company->okpo = $ch->okpo;
        $company->lawcity = $ch->lawcity;
        $company->lawstreet = $ch->lawstreet;
        $company->lawhouse = $ch->lawhouse;
        $company->lawhousing = $ch->lawhousing;
        $company->lawoffice = $ch->lawoffice;
        $company->lawphone = $ch->lawphone;
        $company->lawfax = $ch->lawfax;
        $company->site = $ch->site;
        $company->social1 = $ch->social1;
        $company->social2 = $ch->social2;
        $company->social3 = $ch->social3;
        $company->social4 = $ch->social4;
        $company->social5 = $ch->social5;

        $ch->done = true;
        $ch->save();
        $company->save();

        Session::flash('success', 'Company profile was successfully updated.');
        return back();
    }
}

