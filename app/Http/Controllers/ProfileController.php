<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        if ((Auth::user() === null)) {
            return redirect('login')->with('status', 'Aby się tu dostać musisz się zalogować!');
        } else {

            $id = Auth::user()->getAuthIdentifier();

            $profile = DB::table('users')
                ->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
                ->where('user_profiles.user_id', '=', $id)
                ->get();
            return view('pages.profile', compact('profile'));
        }
    }


    public function imageUpload()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        if(DB::table('user_profiles')->where('user_profiles.user_id','=', $id)->exists())
        {
            DB::table('user_profiles')->where('user_profiles.user_id','=', $id)->update([
                'src' => $imageName,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')]);
        }
        else
        {
            DB::table('user_profiles')->insert([
                'user_id' => Auth::user()->id,
                'src' => $imageName,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')]);
        }

        return back()
//            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    public function displayNameUpload(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();

        $displayName = $request->input('display_name');

        if(DB::table('user_profiles')->where('user_profiles.user_id','=', $id)->exists())
        {
            DB::table('user_profiles')->where('user_profiles.user_id','=', $id)->update([
                'display_name' => $displayName,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')]);
        }
        else
        {
            DB::table('user_profiles')->insert([
            'user_id' => Auth::user()->id,
            'display_name' => $displayName,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]);
        }

        return back()
            ->with('display_name', $displayName);
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