<?php

namespace skulyv\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use skulyv\Http\Controllers\Controller;
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

//    public function url()
//    {
//        if(1 == Auth::user()->role)
//        {
//            return $home = '/home';
//        }
//        return $admin  = '/admin';
//    }

//    protected $redirectTo = '/home';
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
        $this->middleware('guest')->except('logout');
    }
}
