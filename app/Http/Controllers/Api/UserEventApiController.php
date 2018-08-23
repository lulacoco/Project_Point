<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Workshop;
use App\WorkshopUser;

class UserEventApiController extends Controller
{
    public function post($event_id)
    {
        $user_id = 1;

        DB::table('event_users')->insert([
            'event_id' => $event_id,
            'user_id' => $user_id,
        ]);
    }
}