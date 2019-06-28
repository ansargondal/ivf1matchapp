<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\Backend\User;

require_once __DIR__ . '/frontend.php';
require_once __DIR__ . '/admin.php';

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/create/admin', function () {

    $data['fname'] = 'John';
    $data['lname'] = 'Doe';
    $data['email'] = 'admin@gmail.com';
    $data['password'] = 'Alliswell123!@#';

    $user = User::create($data);

    //assign user role of recipient
    $user->assignRole('Admin');

    //recipient has three status (New, Active, Inactive)
    return response()->json(['error' => false,
        'message' => 'Admin user has been created!']);
});
