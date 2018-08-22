<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Workshop;
use App\WorkshopUser;

class UserWorkshopApiController extends Controller
{
    public function post()
    {
        $user_id = 1;
        $workshop_id = 1;

        DB::table('workshop_users')->insert([
            'workshop_id' => $workshop_id,
            'user_id' => $user_id,
        ]);
    }
}

