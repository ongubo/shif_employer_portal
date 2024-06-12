<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registration_setup()
    {
        $registration_type = session()->get('registration_path', 'new');
        return view('auth.setup', [
            'registration_type' => $registration_type,
        ]);
    }

    public function registration_path(Request $request)
    {
        if ($request->direction == 'register_nhif') {
            session()->put('registration_path', 'nhif');
        } else if ($request->direction == 'register_nssf') {
            session()->put('registration_path', 'nssf');
        } else if ($request->direction == 'new_business') {
            session()->put('registration_path', 'new');
        } else if ($request->direction == 'register_sponsor') {
            session()->put('registration_path', 'sponsor');
        }
        return redirect()->route('register.setup');
    }

    public function validate_nssf(Request $request)
    {
        // TODO create logic to validate NSSF
        session()->put('registration_path', 'valid_nssf');
        return redirect()->back()->with('success', 'Details validated succesfully. Please proceed to create your employer account');
    }

    public function create_nssf(Request $request)
    {
        // TODO store nssf to DB
        session()->forget('registration_path');
        return redirect()->back()->with('success', 'Employer account created succesfully');
    }

}