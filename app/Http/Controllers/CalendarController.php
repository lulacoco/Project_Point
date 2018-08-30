<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function index()
    {
        $id = Auth::user()->getAuthIdentifier();

        $event_users = DB::table('event_users')
            ->join('users', 'event_users.user_id', '=','users.id' )
            ->join('events', 'event_users.event_id', '=', 'events.id')
//            ->join('user_profiles', 'user_profiles.user_id','=', 'users.id')  ===> nie ma opcji dodawania rzeczy do profilu więc tu nic nie ma
            ->where('event_users.user_id','=', $id)
            ->get();

        $workshop_users = DB::table('workshop_users')
            ->join('users', 'workshop_users.user_id', '=','users.id' )
            ->join('workshops', 'workshop_users.workshop_id', '=', 'workshops.id')
            ->where('workshop_users.user_id','=', $id)
            ->get();

        return view('pages.calendar', compact('event_users'), compact('workshop_users'));
    }
}
