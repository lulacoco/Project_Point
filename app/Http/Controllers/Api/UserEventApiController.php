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
        DB::table('event_users')->insert([
            'event_id' => $event_id,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}