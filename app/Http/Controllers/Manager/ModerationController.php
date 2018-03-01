<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\CompanyChange;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModerationController extends Controller
{
    public function index(){
        return view('manager/moderation/index');
    }

    public function company(){
        $companychanges = CompanyChange::all()->where('done' , '=', 'false');
        foreach($companychanges as $ch)
            $ch->company = Company::find($ch->company_id);

        return view('manager/moderation/company/index')->with('chs', $companychanges);
    }
}

