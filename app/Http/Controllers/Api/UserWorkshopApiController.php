<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Workshop;
use App\WorkshopUser;

class UserWorkshopApiController extends Controller
{
    public function post($workshop_id)
    {
        if ((Auth::user() === null)) {
            return redirect('login')->with('status', 'Aby się zapisać musisz się zalogować!');
        } else{
            if (DB::table('workshop_users')->where('workshop_id', '=', $workshop_id)->where('user_id', '=', Auth::user()->id)->exists()) {
                return redirect('workshops')->with('error', 'Jesteś już zapisany na to wydarzenie!');
            } else {
                DB::table('workshop_users')->insert([
                    'workshop_id' => $workshop_id,
                    'user_id' => Auth::user()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                return redirect('workshops')->with('status', 'Wydarzenie dodane!');
            }
        }

    }

    public function remove($workshop_id)
    {
        DB::table('workshop_users')->where('workshop_id', '=', $workshop_id)->delete();
        return redirect('calendar')->with('status', 'Warsztaty usunięte!');
    }
}

