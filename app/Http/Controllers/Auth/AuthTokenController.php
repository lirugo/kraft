<?php

namespace App\Http\Controllers\Auth;

use App\Facades\Authy;
use App\Services\Authy\Exceptions\InvalidTokenException;
use App\Services\Authy\Exceptions\SmsRequestFailedException;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthTokenController extends Controller
{
    public function getToken(Request $request){
        if(!$request->session()->has('authy')){
            return redirect()->to('/');
        }

        return view('auth.token');
    }

    public function postToken(Request $request){
        $this->validate($request, [
           'token' => 'required'
        ]);

        try{
            $verification = Authy::verifyToken($request->token);
        } catch (InvalidTokenException $e){
            return redirect()->back()->withErrors([
                'token' => 'Invalid token'
            ]);
        }
        $user = User::find($request->session()->get('authy.user_id'));
            $user->two_factor_type = 'off';
        $user->save();
        if(Auth::loginUsingId(
            $request->session()->get('authy.user_id'),
            $request->session()->get('remember')
        )){
            $request->session()->forget('authy');
            return redirect()->intended();
        }

        return redirect('manage');

    }

    public function getResend(Request $request){
        $user = User::findOrFail($request->session()->get('authy.user_id'));

        if(!$user->hasSmsTwoFactorAuthenticationEnabled() && !$user->hasTwoFactorType('firstTime')){
            return redirect()->back();
        }

        try{
            Authy::requestSms($user);
        }catch (SmsRequestFailedException $e){
            return redirect()->back();
        }

        Session::flash('success', 'Token was resended on your phone');
        return redirect()->back();
    }
}
