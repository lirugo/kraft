<?php

namespace App\Http\Controllers\Manager;

use App\CalcHistory;
use App\Company;
use App\CompanyChange;
use App\ObjectRequestOnDeleting;
use App\OrderRepeatInvoice;
use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class ModerationController extends Controller
{
    public function index(){
        //GetCompanyChange
        $companychanges = CompanyChange::all()->where('done' , '=', false);
        foreach($companychanges as $key => $ch) {
            $ch->company = Company::find($ch->company_id);
            if($ch->company->rmid != Auth::user()->id)
                unset($companychanges[$key]);
        }

        //GetUsersCompanyWhatNotActive
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'worker');
        }
        )->get();
        foreach ($users as $key => $user)
            if($user->active == true || $user->regionname != Auth::user()->regionname)
                unset($users[$key]);

        //Set data
        $data = [
            'company' => count($companychanges),
            'users' => count($users)
        ];

        //Send to view
        return view('manager/moderation/index')->with('data', $data);
    }

    public function company(){
        $companychanges = CompanyChange::all()->where('done' , '=', false);
        foreach($companychanges as $key => $ch) {
            $ch->company = Company::find($ch->company_id);
            if($ch->company->rmid != Auth::user()->id)
                unset($companychanges[$key]);
        }
        return view('manager/moderation/company/index')->with('chs', $companychanges);
    }

    public function activate($id){
        $user = User::find($id);
        $user->active = true;
        $user->save();
        return back();
    }

    public function companyusers(){
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'worker');
        }
        )->get();

        foreach ($users as $key => $user)
        {
            if($user->active == true || $user->regionname != Auth::user()->regionname)
                unset($users[$key]);
        }
        return view('manager.moderation.company.users')->with('users', $users);
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

    public function objects(){
        $objects = ObjectRequestOnDeleting::all();
        return view('manager.moderation.objects')
            ->withObjects($objects);
    }

    public function companyorders(){
        $repeats = OrderRepeatInvoice::where('rm_id', Auth::user()->id)->get()->unique('order_id');
        return view('manager.moderation.company.orders')
            ->withRepeats($repeats);
    }

    public function companyordersPost($repeatId){
        $repeat = OrderRepeatInvoice::find($repeatId);
        $orderId = $repeat->order_id;
        $repeats = OrderRepeatInvoice::where('order_id', $orderId)->get();

        $orders = CalcHistory::where('order_id', $orderId)->get();
        foreach ($orders as $order){
            $order->order_available = true;
            $order->status = false;
            $order->save();
        }

        unlink(public_path('/uploads/orders/'.$orderId.'.pdf'));

        foreach ($repeats as $repeat)
            $repeat->delete();

        Session::flash('success', 'Разрешено');
        return back();
    }
}

