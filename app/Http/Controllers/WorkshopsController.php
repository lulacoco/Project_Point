<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        $workshops = DB::table('workshops')->get();
        return view('pages.workshops', compact('workshops'));
    }

    public function register()
    {

    }
}
