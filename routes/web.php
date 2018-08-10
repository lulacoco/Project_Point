<?php
use Illuminate\Support\Facades\DB;


Route::get('/', function ()
{
    return view('pages.home');
});

Route::get('/schedule', function()
{
    return view('pages.schedule');
});

Route::get('/groups', function()
{
    $groups = DB::table('groups')->get();
//    return view('pages.groups');
    return view('pages.groups', compact('groups'));
});

Route::get('/events', function()
{
    return view('pages.events');
});

Route::get('/about', function()
{
    $users = DB::table('users')
        ->join('user_roles', 'users.id','=','user_roles.id')->where('user_roles.role_id','=',2)
        ->get();
//    return view('pages.about');

    return view('pages.about', compact('users'));
});

Route::get('/contact', function()
{
    return view('pages.contact');
});



