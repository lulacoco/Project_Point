<?php

use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $homeController = new App\Http\Controllers\HomeController();
    return $homeController->index();
});

Route::get('/contact', function () {
    $contactController = new App\Http\Controllers\ContactController();
    return $contactController->index();
});

Route::get('/events', function () {
    $scheduleController = new App\Http\Controllers\ScheduleController();
    return $scheduleController->index();
});

Route::get('/groups', function () {
    $groupsController = new App\Http\Controllers\GroupsController();
    return $groupsController->index();
});

Route::get('/workshops', function () {
    $workshopsController = new App\Http\Controllers\WorkshopsController();
    return $workshopsController->index();
});

Route::get('/about', function () {
    $aboutController = new App\Http\Controllers\AboutController();
    return $aboutController->index();
});

Route::get('/registration', function () {
    $registrationController = new App\Http\Controllers\RegistrationController();
    return $registrationController->create();
});

Route::get('/events/sign-up-{id}', function ($id) {
    $userEventApiController = new App\Http\Controllers\Api\UserEventApiController();
    return $userEventApiController->post($id);
})->where('id', '[0-9]+');

Route::get('/workshops/sign-up-{id}', function ($id) {
    $userWorkshopApiController = new App\Http\Controllers\Api\UserWorkshopApiController();
    return $userWorkshopApiController->post($id);
})->where('id', '[0-9]+');

Route::get('/login', function () {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->index();
});

//Route::post('/login/checklogin', function () {
//    $loginController = new App\Http\Controllers\Auth\LoginController();
//    return $loginController->checklogin();
//});



Route::post('/login/checklogin', 'Auth\LoginController@checklogin');


Route::get('/successlogin', function () {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->successlogin();
});

Route::get('/login/logout', function () {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->logout();
});



//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');




//Route::get('/register', 'RegistrationController@create');
//Route::post('register', 'RegistrationController@store');

//Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
//Route::get('/logout', 'SessionsController@destroy');


Route::get('/home', 'HomeController@index')->name('home');
