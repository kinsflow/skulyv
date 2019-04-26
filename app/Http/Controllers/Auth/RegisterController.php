<?php

namespace skulyv\Http\Controllers\Auth;

use skulyv\ClassName;
use skulyv\User;
use skulyv\Profile;
use skulyv\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    public function passData()
    {

    }
    public function redirectTo()
    {
        // User role
        $role = Auth::user()->role;

        // Check user role
        switch ($role) {
            case 1:
                return '/admin';
                break;
            case 0:
                return '/home';
                break;
            default:
                return '/login';
                break;
        }
    }

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'integer', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'class_id' => ['required', 'integer', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \skulyv\User
     */
    protected function create(array $data)
    {
//        dd($data['class_id']);

          $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'class_id' => $data['class_id'],
            'password' => Hash::make($data['password']),

        ]);

            Profile::create([
            'user_id' => $user->id,
            'class_id' => $data['class_id'],
        ]);
    }
}
