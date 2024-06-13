<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
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
        // dd(session()->get('employer'));
        return view('auth.setup', [
            'registration_type' => $registration_type,
            'nssf_employer' => session()->get('employer'),
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
        $data = [
            "username" => $request->username,
            "password" => $request->password,
            "employerId" => $request->employerId,
        ];
        try {
            $verification_response = get_org_details($data);
        } catch (\Throwable $th) {
            Log::channel('app')->info('Verify Employer  error' . json_encode([
                'error' => $th->getMessage(),
                'request' => $data,
                'date' => Carbon::now(),
            ]));
            return redirect()->back()->with('error', 'Unable to verify Employer details. Please try again later');
        }

        if ($verification_response->successful()) {
            $verification_data = $verification_response->json();
            $verification_data['data']['username'] = $data['username'];
            $verification_data['data']['password'] = $data['password'];
            session()->put('registration_path', 'valid_nssf');
            session()->put('employer', $verification_data['employer']);
            return redirect()->back()->with('success', 'Details validated succesfully. Please proceed to create your employer account'
            );
        } else {
            try {
                $message = '';
                return redirect()->back()->with('error', $verification_response['message']);
            } catch (\Throwable $th) {
                Log::channel('app')->info('verify employer details response error' . json_encode([
                    'error' => $th->getMessage(),
                    'date' => Carbon::now(),
                ]));
                return redirect()->back()->with('error', $verification_response['message']);
            }
        }
        // return true;

    }

    public function create_nssf(Request $request)
    {
        // TODO store nssf to DB
        session()->forget('registration_path');
        return redirect()->back()->with('success', 'Employer account created succesfully');
    }

}