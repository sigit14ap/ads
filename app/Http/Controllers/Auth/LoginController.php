<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::guard($guard)->check() && Auth::user()->level == "admin") {
        protected $redirectTo = '/admin';
    }elseif (Auth::guard($guard)->check() && Auth::user()->level == "pusat") {
        protected $redirectTo = '/pusat';
    }elseif (Auth::guard($guard)->check() && Auth::user()->level == "satker") {
        protected $redirectTo = '/satker';
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
