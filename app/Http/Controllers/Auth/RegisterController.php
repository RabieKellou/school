<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'user_cin' => ['required', 'string','min:6', 'max:10'],
            // 'user_role' => ['required', 'string','in:etudiant,enseignant,admin', 'max:255'],
            'user_role' => ['required', 'numeric', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
            'doj' => ['required', 'date'],
            'gender' => ['required', 'string','in:M,F'],
            'phone' => ['required', 'string', 'max:255'],
            'social_status' => ['required', 'string', 'in:C,M,D'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([

            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'user_role' => $data['user_role'],
            'user_cin' => $data['user_cin'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => $data['dob'],
            'doj' => $data['doj'],
            'social_status' => $data['social_status'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
        ]);

    }
}
