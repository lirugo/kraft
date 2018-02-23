<?php

namespace App\Http\Controllers\Auth;



use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Image;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegisterUser(){
        return view('auth.registeruser');
    }

    public function createRegisterUser(Request $request){

        //Validate
        $this->validate($request,[
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'dateofbirth' => 'required|max:255',
            'sex' => 'required',
            'region' => 'required',
            'phone' => 'required|regex:/(\+38)[ 0-9]{10}/',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Save data to db
        $user = new User;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->dateofbirth = $request->dateofbirth;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if($request->region[0] == 1)
            $regionname = "center";
        elseif($request->region[0] == 2)
            $regionname = "east";
        elseif($request->region[0] == 3)
            $regionname = "south";
        elseif($request->region[0] == 4)
            $regionname = "west";

        $user->region = $request->region;
        $user->regionname = $regionname;

        // IF have avatar save
        if(!empty($request->avatar))$user->avatar = $request->avatar;

        //Save user
        $user->save();

        //AttachRole designer/arch for new user
        $designer = Role::where('name', 'designer')->first();
        $user->attachRole($designer);

        //Flash message
        Session::flash('success', 'Architec/Designer was successfully created.');
        //Redirect
        return view('auth.complete');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'patronymic' => $data['patronymic'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
