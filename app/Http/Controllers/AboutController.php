<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->join('user_roles', 'users.id', '=', 'user_roles.id')->join('user_profiles', 'user_profiles.id', '=', 'users.id')
            ->where('user_roles.role_id', '=', 2)
            ->get();

        return view('pages.about', compact('users'));
    }
}
