<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

//        if(Auth::attempt($user_data))
        if(Auth::check($user_data))
        {
            return redirect('/successlogin');
        }
        else
        {
            return back()->with('error', 'Błędny login lub hasło');
        }
    }

    function successlogin()
    {
        return view('auth.successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}