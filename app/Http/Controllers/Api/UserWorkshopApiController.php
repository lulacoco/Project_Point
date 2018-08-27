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
    public function post($workshop_id)
    {
        $user_id = 1;

        DB::table('workshop_users')->insert([
            'workshop_id' => $workshop_id,
            'user_id' => $user_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

