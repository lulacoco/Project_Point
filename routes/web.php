<?php

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
    return view('pages.groups');
});

Route::get('/events', function()
{
    return view('pages.events');
});

Route::get('/about', function()
{
    return view('pages.about');
});

Route::get('/contact', function()
{
    return view('pages.contact');
});



