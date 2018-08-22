<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $events = DB::table('events')->get();
        return view('pages.schedule', compact('events'));
    }
}
