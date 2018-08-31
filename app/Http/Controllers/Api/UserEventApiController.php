<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Workshop;
use App\WorkshopUser;

class UserEventApiController extends Controller
{
    public function post($event_id)
    {
        if ((Auth::user() === null)) {
            return redirect('login')->with('status', 'Aby się zapisać musisz się zalogować!');
        } else {
            if (DB::table('event_users')->where('event_id', '=', $event_id)->where('user_id', '=', Auth::user()->id)->exists()) {
                return redirect('events')->with('error', 'Jesteś już zapisany na te zajęcia!');
            } else {
                DB::table('event_users')->insert([
                    'event_id' => $event_id,
                    'user_id' => Auth::user()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                return redirect('events')->with('status', 'Zajęcia dodane!');
            }
        }
    }

    public function remove($event_id)
    {
        DB::table('event_users')->where('event_id', '=', $event_id)->delete();
        return redirect('calendar')->with('status', 'Zajęcia usunięte!');;
    }
}