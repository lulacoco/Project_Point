<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('pages.registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'e_mail' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['first_name', 'e_mail', 'password']));

        auth()->login($user);

        return redirect()->to('/home');
    }
}