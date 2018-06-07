<?php

namespace App\Http\Controllers\Auth;

use Authy;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Authy\Exceptions\SmsRequestFailedException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/manage/dashboard';
    protected $redirectToToken = '/auth/token';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function credentials(Request $request)
    {
        return [
            $this->username() => $request->get($this->username()),
            'password' => $request->get('password'),
            'active' => 1
        ];
    }

    protected function authenticated(Request $request, User $user){
        if($user->hasTwoFactorAuthenticationEnabled()){
            return $this->logoutAndRedirectToTokenEntry($request, $user);
        }

        return redirect()->intended($this->redirectPath());
    }

    protected function logoutAndRedirectToTokenEntry(Request $request, User $user){
        Auth::guard()->logout();

        $request->session()->put('authy', [
           'user_id' => $user->id,
           'authy_id' => $user->authy_id,
           'using_sms' => false,
           'remember' => $request->has('remember')
        ]);
        if($user->hasSmsTwoFactorAuthenticationEnabled()){
            try{
                Authy::requestSms($user);
            }catch (SmsRequestFailedException $e){
                return redirect()->back();
            }
            $request->session()->push('authy.using_sms', true);
        }

        return redirect($this->redirectTokenPath());
    }

    protected function redirectTokenPath(){
        return $this->redirectToToken;
    }

}
