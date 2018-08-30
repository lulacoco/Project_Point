<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    protected function validator(array $data)
    {
//        dd($data);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function create(array $data)
    {
//        dd($data);
        return User::create([
            'first_name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function store()
    {
//        dd("lol");
        $this->validate(request(), [
            'first_name' => 'required',
            'e_mail' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['first_name', 'e_mail', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }
}