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
        $id = Auth::user()->getAuthIdentifier();

        $profile = DB::table('users')
            ->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
            ->where('user_profiles.user_id', '=', $id)
            ->get();
        return view('pages.profile', compact('profile'));
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
            'last_name' => str_random(10),
            'display_name' => str_random(10),
            'age' => mt_rand(10, 99),
            'description' => str_random(10),
            'src' => $imageName,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

//        $path = 'profile/'.$imageName;
//        return redirect($path);
    }


    //NIE WIEM CZY TO ZOSTANIE!!!
//    public function imageRemove()
//    {
//        $id = Auth::user()->getAuthIdentifier();
//
//        DB::table('user_profiles')->where('user_id', '=', $id)->delete();
//        return redirect('profile');
//    }

    public function create()
    {
        return view('user_profiles.create');
    }
}