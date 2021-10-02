<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Spatie\Permission\Models\Role;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username() {
        return 'username';
    }
    public function checkLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $admin=Role::findById(1);
        $staff=Role::findById(2);
        Auth::attempt($data);
        if(Auth::user()->status==0)
        {
            Auth::logout();

            return redirect()->route('home');
        }
        elseif (Auth()->user()->hasRole([$admin,$staff])) {
            //true
            return redirect()->route('admin');
            /* echo 'ok'; */
        } else {
            //false
            return redirect()->route('home');
            /* echo 'not ok'; */
        }
    }
}
