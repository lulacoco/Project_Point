<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->getAuthIdentifier();

        $profile = DB::table('user_profiles')
            ->join('users', 'user_profiles.user_id', '=','users.id' )
            ->where('user_profiles.users.id','=', $id)
            ->get();
        return view('pages.profile', compact('profile'));
    }

    public function create()
    {
        return view('user_profiles.create');
    }

}