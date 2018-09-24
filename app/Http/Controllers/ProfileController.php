<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $profiles = DB::table('user_profiles')
            ->get();

        return view('pages.profile', compact('profiles', $user));
    }


    public function imageUpload()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        DB::table('user_profiles')->insert([
            'user_id' => Auth::user()->id,
            'last_name' => 'Przyklad',
            'display_name' => 'Przyklad',
            'age' => '11',
            'description' => 'Przyklad',
            'src' => $imageName,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function create()
    {
        return view('user_profiles.create');
    }
}