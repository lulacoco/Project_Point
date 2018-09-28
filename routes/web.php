<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

Route::get('/calendar', function () {
    $calendarController = new App\Http\Controllers\CalendarController();
    return $calendarController->index();
});

Route::get('/profile', function () {
    $profileController = new App\Http\Controllers\ProfileController();
    return $profileController->index();
});

Route::post('/profile', function() {
    $profileController = new App\Http\Controllers\ProfileController();
    return $profileController->imageUpload();
});

Route::post('/profile', function(Request $request) {
    $profileController = new App\Http\Controllers\ProfileController();
    return $profileController->displayNameUpload($request);
});

//Route::post('/profile', function () {
//    $profileController = new App\Http\Controllers\ProfileController();
//    return $profileController->imageRemove();
//});


Route::get('/events/sign-up-{id}', function ($id) {
    $userEventApiController = new App\Http\Controllers\Api\UserEventApiController();
    return $userEventApiController->post($id);
})->where('id', '[0-9]+');

Route::get('/events/sign-off-{id}', function ($id) {
    $userEventApiController = new App\Http\Controllers\Api\UserEventApiController();
    return $userEventApiController->remove($id);
})->where('id', '[0-9]+');

Route::get('/workshops/sign-up-{id}', function ($id) {
    $userWorkshopApiController = new App\Http\Controllers\Api\UserWorkshopApiController();
    return $userWorkshopApiController->post($id);
})->where('id', '[0-9]+');

Route::get('/workshops/sign-off-{id}', function ($id) {
    $userWorkshopApiController = new App\Http\Controllers\Api\UserWorkshopApiController();
    return $userWorkshopApiController->remove($id);
})->where('id', '[0-9]+');

Route::get('/register', function () {
    $registerController = new App\Http\Controllers\Auth\RegisterController();
    return $registerController->index();
});

Route::post('/register', function (Request $request) {
    $registerController = new App\Http\Controllers\Auth\RegisterController();
    return $registerController->create($request);
});

Route::get('/login', function () {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->index();
});

Route::get('/successlogin', function () {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->successlogin();
});

Route::get('/logout', function (Request $request) {
    $loginController = new App\Http\Controllers\Auth\LoginController();
    return $loginController->logout($request);
});

Route::get('/home', function() {
    $loggedController = new App\Http\Controllers\Auth\LoginController();
    return $loggedController->logged();
});

Auth::routes();