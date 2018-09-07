<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('includes.header', function ($view)
        {
            if ((Auth::user() !== null))
            {
                $id = Auth::user()->getAuthIdentifier();
                $headerData = DB::table('user_profiles')
                    ->where('user_profiles.user_id', '=', $id)
                    ->get();
                $view->headerData = $headerData;
            }
        });
    }

    public function register()
    {
    }
}